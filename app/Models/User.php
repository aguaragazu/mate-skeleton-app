<?php

namespace App\Models;

use Mate\Auth\Authenticatable;

/**
 * Authenticated user.
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 */
class User extends Authenticatable {
    protected array $hidden = ["password"];

    protected array $fillable = [
        "name",
        "email",
        "password"
    ];
}
