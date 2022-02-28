<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyLocation extends Model
{
    protected $fillable = [
    "country",
    "state",
    "address",
    "phone",
    "email",
    "picure"];
}
