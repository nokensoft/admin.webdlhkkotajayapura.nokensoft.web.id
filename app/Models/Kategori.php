<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kategori extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = ["title","deskripsi","katakunci","image","status","slug","created_by","updated_by","deleted_by"];
}
 