<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Halaman extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ["title","konten","deskripsi","katakunci","image","status","slug","created_by","updated_by","deleted_by"];
}
