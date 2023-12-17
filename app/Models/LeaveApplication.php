<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\LeaveApplication
 *
 * @property int $id
 * @property int $employee_id
 * @property int $leave_type_id
 * @property string $start_date
 * @property string $end_date
 * @property string $reason
 * @property int $approval_level
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\LeaveType $leaveType
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|LeaveApplication newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LeaveApplication newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LeaveApplication query()
 * @method static \Illuminate\Database\Eloquent\Builder|LeaveApplication whereApprovalLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LeaveApplication whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LeaveApplication whereEmployeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LeaveApplication whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LeaveApplication whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LeaveApplication whereLeaveTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LeaveApplication whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LeaveApplication whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LeaveApplication whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LeaveApplication whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class LeaveApplication extends Model
{
    protected $fillable = ['user_id', 'leave_type_id', 'reason', 'approval_level', 'status'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function leaveType(): BelongsTo
    {
        return $this->belongsTo(LeaveType::class);
    }
}
