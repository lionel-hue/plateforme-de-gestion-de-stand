<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Hash;

class Entrepreneur extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'enterprise_name',
        'email',
        'password',
        'role',
        'status',
        'rejection_reason',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Check if entrepreneur is approved
     */
    public function isApproved(): bool
    {
        return $this->status === 'accepted' && $this->role === 'entrepreneur_accepted_approval';
    }

    /**
     * Check if entrepreneur is waiting for approval
     */
    public function isWaitingApproval(): bool
    {
        return $this->status === 'waiting';
    }

    /**
     * Check if entrepreneur is rejected
     */
    public function isRejected(): bool
    {
        return $this->status === 'rejected';
    }
}
