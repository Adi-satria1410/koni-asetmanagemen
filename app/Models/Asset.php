<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $fillable = [
        'kode','nama','kategori_asset_id','lokasi_id',
        'kondisi_asset_id','supplier_id',
        'tanggal_perolehan','nilai','status'
    ];

    public function kategori() {
        return $this->belongsTo(KategoriAsset::class, 'kategori_asset_id');
    }

    public function lokasi() {
        return $this->belongsTo(Lokasi::class);
    }

    public function kondisi() {
        return $this->belongsTo(KondisiAsset::class, 'kondisi_asset_id');
    }

    public function supplier() {
        return $this->belongsTo(Supplier::class);
    }

    public function pemeliharaan() {
        return $this->hasMany(PemeliharaanAsset::class);
    }

    public function penghapusan() {
        return $this->hasOne(PenghapusanAsset::class);
    }
}
