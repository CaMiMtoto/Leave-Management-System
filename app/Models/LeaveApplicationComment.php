<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
