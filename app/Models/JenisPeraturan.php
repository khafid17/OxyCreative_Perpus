<?php

namespace App\Models;
use App\Models\DraftHukum;
use App\Models\ProdukHukum;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisPeraturan extends Model
{
    
    use HasFactory;
    // protected $table = 'jenisperaturan';

    protected $fillable = ['nama','inisial'];

    public function ProdukHukum(){
    	return $this->hasMany(ProdukHukum::class, 'jenis_peraturan_id', 'id');
    }
    public function drafthukum(){
    	return $this->hasMany(drafthukum::class);
    }
}
