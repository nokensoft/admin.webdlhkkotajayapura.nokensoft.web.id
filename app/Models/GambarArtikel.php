<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class GambarArtikel extends Model
{
    use HasFactory;
    protected $fillable = ["keterangan","image","status","created_by","updated_by","deleted_by","artikel_id"];

}
