<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthGroupUserModel extends Model
{
    use HasFactory;
    protected $table = ['auth_group_user'];
    protected $fillable = ['user_id', 'group_id'];
}
