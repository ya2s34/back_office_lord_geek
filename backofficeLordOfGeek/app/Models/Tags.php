<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tags extends Model
{
    use HasFactory;
    protected $table = "tags";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = ['titre'];
}
