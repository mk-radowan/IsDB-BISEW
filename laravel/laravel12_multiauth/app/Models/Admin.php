<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Support\Facades\Hash;

class Admin extends Authenticatable
{
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // protected $hidden = [
    //     'password',
    // ];

    // public function setPasswordAttribute($value): void
    // {
    //     if (empty($value) || $this->isHashed($value)) {
    //         $this->attributes['password'] = $value;
    //         return;
    //     }

    //     $this->attributes['password'] = Hash::make($value);
    // }

    // public function getAuthPassword(): string
    // {
    //     $password = $this->attributes['password'] ?? $this->password;

    //     if (empty($password)) {
    //         return '';
    //     }

    //     if (! $this->isHashed($password)) {
    //         $hashedPassword = Hash::make($password);

    //         if ($this->exists) {
    //             $this->forceFill(['password' => $hashedPassword])->saveQuietly();
    //         }

    //         return $hashedPassword;
    //     }

    //     return $password;
    // }

    // protected function isHashed(string $value): bool
    // {
    //     return preg_match('/^\$2[ayb]\$.{56}$/', $value) === 1;
    // }
}
