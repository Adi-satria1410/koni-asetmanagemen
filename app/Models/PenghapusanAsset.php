<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PenghapusanAsset extends Model
{
    protected $fillable = ['asset_id','tanggal','alasan'];

    public function asset() {
        return $this->belongsTo(Asset::class);
    }
}
