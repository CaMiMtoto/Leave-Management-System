<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Leave extends Model
{
    use HasFactory;

    public function currentApprovalLevel(): BelongsTo
    {
        return $this->belongsTo(ApprovalLevel::class, 'current_approval_level');
    }
}
