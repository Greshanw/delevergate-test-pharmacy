<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $table = 'medicine';
    public $timestamps = true;
	
	protected $fillable = [
		'name', 'type','dose',
	];
}
