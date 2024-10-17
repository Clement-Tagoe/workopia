<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Applicant extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_id',
        'user_id',
        'full_name',
        'contact_phone',
        'contact_email',
        'message',
        'location',
        'resume_path',
    ];

    // Relation to job
    public function job(): BelongsTo
    {
        return $this->belongsTo(Job::class);
    }

    // Relation to user
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
