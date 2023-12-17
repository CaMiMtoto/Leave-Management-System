<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\LeaveApplicationComment
 *
 * @property int $id
 * @property int $leave_application_id
 * @property string $comment
 * @property int|null $user_id
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\LeaveApplication $leaveApplication
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|LeaveApplicationComment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LeaveApplicationComment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LeaveApplicationComment query()
 * @method static \Illuminate\Database\Eloquent\Builder|LeaveApplicationComment whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LeaveApplicationComment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LeaveApplicationComment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LeaveApplicationComment whereLeaveApplicationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LeaveApplicationComment whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LeaveApplicationComment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LeaveApplicationComment whereUserId($value)
 * @mixin \Eloquent
 */
class LeaveApplicationComment extends Model
{
    protected $fillable = ['leave_application_id', 'comment', 'user_id'];

    public function leaveApplication(): BelongsTo
    {
        return $this->belongsTo(LeaveApplication::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
