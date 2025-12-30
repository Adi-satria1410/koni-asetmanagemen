<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriAsset extends Model
{
    protected $fillable = ['nama','keterangan'];

    public function assets() {
        return $this->hasMany(Asset::class);
    }
}

