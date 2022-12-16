<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    use HasFactory;
    protected $table ='addvenues';
    protected $fillable = ['name','address','price','capacity','photo', 'user_id'];
}


