<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class yieldChangesModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'country',
        'yearr',
        'esc',
        'harvest',
        'changes',
    ];
}
