@use(App\Enums\Status)
<x-slot:title>{{ __('Home') }}</x-slot:title>

<div>
    <flux:heading size="xl" level="1">{{ __('Hey!') }}</flux:heading>
    <flux:text class="mt-2 text-base">{{ __('Thanks for visiting, here\'s what\'s new') }}</flux:text>
    <flux:separator variant="subtle" class="my-6"/>

    <x-placeholder-pattern/>
</div>
