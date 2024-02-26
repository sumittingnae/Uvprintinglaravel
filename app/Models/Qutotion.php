<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qutotion extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'contact',
        'email',
        'wpb',
        'size',
        'material',
        'qty'

        // Add other fillable fields as needed
    ];
}
