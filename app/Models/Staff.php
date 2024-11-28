<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Staff extends Model
{
    //
    use HasFactory;
    protected $table = 'staff';
    protected $fillable = ['nip', 'name', 'alamat', 'email'];
    public $timestamps = false;
}
