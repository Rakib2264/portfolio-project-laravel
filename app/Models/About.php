<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable=[
        'howmanyyearex',
            'des1',
            'des2',
            'des3',
            'des4',
            'imageone',
            'imagetwo',
            'allclientsnum',
            'clientdes',
            'allprojectsnum',
            'projectdes',
    ];
}
