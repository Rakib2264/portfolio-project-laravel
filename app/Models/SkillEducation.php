<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillEducation extends Model
{
    use HasFactory;
    protected $fillable=([
            "shortdes",
            "html",
            "css",
            "bootstrap",
            "js",
            "jquery",
            "ajax",
            "php",
            "php_oop",
            "laravel",
            "restapi",
            "webdevdes",
            "exyear",
            "excompany",
            "degree",
            "degyear",
            "instiute",
    ]);
}
