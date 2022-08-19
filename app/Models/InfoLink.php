<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoLink extends Model
{
    use HasFactory;

    protected $fillable = [
        'online_status',
        'avatar',
        'job_title',
        'phone',
        'address',
        'telegram',
        'instagram',
        'vk',

    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
