<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatble;

class User extends Authenticatble
{
    use HasFactory;

    protected $table = 'tb_user';
    protected $primaryKey = 'user_id';

    protected $fillable = ['username','email','fakultas','prodi','nim','nomor'];
}
