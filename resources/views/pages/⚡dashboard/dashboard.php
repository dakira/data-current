<?php

use App\Models\Initiative;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

new class extends Component
{
    use WithPagination;

    #[Computed]
    public function last30DaysSubmitted()
    {
        return collect(DB::select("
            WITH RECURSIVE dates_without_gaps(date) AS (
                SELECT date('now', '-30 day') AS date
                UNION ALL
                SELECT date(date, '+1 day')
                FROM dates_without_gaps
                WHERE date < date('now')
            )
            SELECT dates_without_gaps.date,
            (
                SELECT COUNT(*)
                FROM initiatives
                WHERE date(initiatives.submitted_at) <= dates_without_gaps.date
            ) AS count
            FROM dates_without_gaps
            ORDER BY dates_without_gaps.date
        "))->map(fn ($date) => get_object_vars($date))->toArray();
    }


    #[Computed]
    public function greeting()
    {
        $time = now()->toImmutable();

        $greeting = match (true) {
            $time->isBefore($time->setHour(11)->setMinute(0)) => 'Good morning, :firstname',
            $time->isBetween($time->setHour(11)->setMinute(0), $time->setHour(13)->setMinute(0)) => 'Happy lunch break, :firstname',
            $time->isBetween($time->setHour(13)->setMinute(0), $time->setHour(19)->setMinute(0)) => 'Good afternoon, :firstname',
            $time->isAfter($time->setHour(19)->setMinute(0)) => 'Good evening, :firstname',
            default => 'Hello, :firstname',
        };

        return __($greeting, ['firstname' => Auth::user()->firstname]);
    }

    #[Computed]
    public function initiatives()
    {
        return Initiative::query()
             ->where('submitter_id', Auth::id())
             ->orWhere('tdbuddy_id', Auth::id())
             ->orWhere('business_owner_id', Auth::id())
             ->orWhere('application_manager_id', Auth::id())
             ->orderBy('submitted_at', 'desc')
             ->paginate(4);
    }

    public function continueDraft(Initiative $initiative)
    {
        $this->authorize('update', $initiative);
        Session::put('draftInitiativeId', $initiative->id);
        $this->redirectRoute('initiatives.create', ['step' => 2]);
    }

    public function deleteDraft(Initiative $initiative)
    {
        $this->authorize('delete', $initiative);
        $initiative->delete();
    }

    public function newInitiative()
    {
        $this->redirectRoute('initiatives.create');
    }
};
