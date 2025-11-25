<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * @property int $id
 * @property int $initiative_id
 * @property int|null $user_id
 * @property string $body
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\CommentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment whereInitiativeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment whereUserId($value)
 */
	class Comment extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string|null $title
 * @property \App\Enums\Status $status
 * @property int $submitter_id
 * @property int|null $tdbuddy_id
 * @property int|null $business_owner_id
 * @property int|null $application_manager_id
 * @property string|null $challenge
 * @property bool|null $is_based_on_policy
 * @property string|null $goal
 * @property int|null $number_affected_users
 * @property string|null $deadline_date
 * @property string|null $deadline_reason
 * @property string|null $first_contact_with
 * @property int|null $has_consulted_controlling
 * @property int|null $is_department_budget_allocated
 * @property string|null $additional_notes
 * @property string|null $eam_id
 * @property int|null $is_not_eam_relevant
 * @property int|null $is_relevant_for_workers_council
 * @property int|null $is_approved_by_workers_council
 * @property int|null $is_processing_pii
 * @property int|null $is_approved_by_dpo
 * @property int|null $is_approved_by_ism
 * @property \Illuminate\Support\Carbon|null $submitted_at
 * @property string|null $assessment_at
 * @property string|null $declined_at
 * @property string|null $blocked_at
 * @property string|null $boardreview_at
 * @property string|null $accepted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $businessOwner
 * @property-read \App\Models\User $submitter
 * @property-read \App\Models\User|null $tdbuddy
 * @method static \Database\Factories\InitiativeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Initiative newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Initiative newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Initiative query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Initiative whereAcceptedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Initiative whereAdditionalNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Initiative whereApplicationManagerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Initiative whereAssessmentAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Initiative whereBlockedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Initiative whereBoardreviewAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Initiative whereBusinessOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Initiative whereChallenge($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Initiative whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Initiative whereDeadlineDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Initiative whereDeadlineReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Initiative whereDeclinedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Initiative whereEamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Initiative whereFirstContactWith($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Initiative whereGoal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Initiative whereHasConsultedControlling($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Initiative whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Initiative whereIsApprovedByDpo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Initiative whereIsApprovedByIsm($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Initiative whereIsApprovedByWorkersCouncil($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Initiative whereIsBasedOnPolicy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Initiative whereIsDepartmentBudgetAllocated($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Initiative whereIsNotEamRelevant($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Initiative whereIsProcessingPii($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Initiative whereIsRelevantForWorkersCouncil($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Initiative whereNumberAffectedUsers($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Initiative whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Initiative whereSubmittedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Initiative whereSubmitterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Initiative whereTdbuddyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Initiative whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Initiative whereUpdatedAt($value)
 */
	class Initiative extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string|null $provider_id
 * @property string|null $provider_token
 * @property string $kid
 * @property string $firstname
 * @property string $lastname
 * @property string $name
 * @property string $email
 * @property array<array-key, mixed>|null $roles
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string|null $password
 * @property string|null $profile_photo_path
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $two_factor_confirmed_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereKid($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereProfilePhotoPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereProviderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereProviderToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRoles($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereTwoFactorConfirmedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereTwoFactorRecoveryCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereTwoFactorSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

