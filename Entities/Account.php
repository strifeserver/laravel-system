<?php

namespace Modules\System\Entities;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;

class Account extends Authenticatable
{
    use HasFactory;
    use HasApiTokens;

    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'email',
        'password',
        'temporary_password',
        'account_level',
        'account_status',
    ];


    








    protected $table = 'accounts';

    protected static function newFactory()
    {
        return \Modules\System\Database\Factories\AccountFactory::new();
    }
}
