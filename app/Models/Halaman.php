<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Halaman extends Model
{
    use HasFactory,SoftDeletes;
    public $guarded = [];

    public function user(){
        return $this->belongsTo(User::class,'created_by');
    }
}
