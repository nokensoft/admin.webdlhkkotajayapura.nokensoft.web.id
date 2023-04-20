<?php

namespace App\Models\Berita;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    public $guarded = [];

    public function kategori(){
        return $this->belongsTo(KategoriBerita::class,'category_id');
    }
    public function author(){
        return $this->belongsTo(User::class,'user_id',);
    }
}
