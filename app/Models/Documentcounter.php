<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documentcounter extends Model
{
    use HasFactory;

    protected $fillable = [
        'document_type',
        'subcode',
        'starting_point',
        'current_point',
        'active',
        'created_by_user_id'
    ];
}
