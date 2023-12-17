<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\ApprovalLevel
 *
 * @property int $id
 * @property int $user_id
 * @property int $level
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|ApprovalLevel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ApprovalLevel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ApprovalLevel query()
 * @method static \Illuminate\Database\Eloquent\Builder|ApprovalLevel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApprovalLevel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApprovalLevel whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApprovalLevel whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApprovalLevel whereUserId($value)
 * @mixin \Eloquent
 */
class ApprovalLevel extends Model
{

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
