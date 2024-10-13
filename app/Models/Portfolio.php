<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    const PORTFOLIO_TYPES = [
        'design' => 'Design',
        'video' => 'Video',
        'motion' => 'Motion',
        'photo' => 'Photo'
    ];

    use HasFactory;

    public $table = 'portfolio';

    protected $fillable = [
        'title',
        'description',
        'portfolio_type',
        'date',
    ];
}
