<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // Kolom mana saja yang boleh diisi
    protected $fillable = ['name', 'email', 'message'];
}