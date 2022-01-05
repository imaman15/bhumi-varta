<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBrands extends Model
{
    use HasFactory;

    protected $table = 'users_brands';

    protected $hidden = ["created_at", "updated_at"];
}
