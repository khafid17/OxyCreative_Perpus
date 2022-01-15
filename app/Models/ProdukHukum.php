<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukHukum extends Model
{
    
    use HasFactory;
    protected $fillable = ['judul','nomor', 'tahun', 'status', 'sumber', 'abstrak', 'tanggal_penetapan', 'tanggal_diundangkan', 'opd_id', 'jenis_peraturan_id', 'kategori_hukum_id', 'file', 'draft'];

    public function opd(){
    	return $this->belongsTo(opd::class);
    }
    public function JenisPeraturan(){
    	return $this->belongsTo(JenisPeraturan::class);
    }
    public function KategoriHukum(){
    	return $this->belongsTo(KategoriHukum::class, 'kategori_hukum_id', 'id');
    }

    
}
