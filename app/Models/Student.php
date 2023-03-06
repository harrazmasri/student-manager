<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Student extends Authenticatable
{
    use HasFactory;

    protected $table = 'students';

    // protected $primaryKey = 'id';

    protected $fillable = [
        'username',
         'password',
         'ic_num',
         'name',
         'age',
         'gender',
         'phone_num',
         'course',
         'address',
         'nationality',
         'religion',
         'race',
         'avatar',
         'biography',
         'language',
         'skill',
         'curricular',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

}
