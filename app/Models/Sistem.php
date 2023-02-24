<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sistem extends Model
{
    use HasFactory;
    protected $fillable = ["pemilik","title","tagline","icon","logo","favicon","email","phone","address","facebook","twitter","instagram","youtube","tiktok","whatsapp"];
}

 