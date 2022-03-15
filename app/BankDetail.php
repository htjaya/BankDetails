<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankDetail extends Model
{
    protected $fillable =[
        'user_id', 'bank_name', 'branch', 'branch_code', 'account_number'
    ];
}
