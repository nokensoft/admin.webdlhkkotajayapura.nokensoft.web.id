<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ["title","konten","deskripsi","katakunci","image","status","slug","created_by","updated_by","deleted_by","kategori_id"];
}

 