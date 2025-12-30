<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PemeliharaanAsset extends Model
{
    protected $fillable = ['asset_id','tanggal','keterangan','biaya'];

    public function asset() {
        return $this->belongsTo(Asset::class);
    }
}
