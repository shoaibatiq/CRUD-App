<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CRUD extends Model
{
    use HasFactory;
    public $table = "crudtable";
    public $timestamps = false;
}
