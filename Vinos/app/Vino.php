<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vino extends Model
{
    protected $fillable = ['name','img','CPE','CPC','CPA','CPGA'];
}
