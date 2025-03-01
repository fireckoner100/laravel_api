<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory,HasApiTokens;
    protected $fillable = ['title', 'description', 'completed'];
}
