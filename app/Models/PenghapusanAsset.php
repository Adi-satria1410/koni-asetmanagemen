<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PenghapusanAsset extends Model
{
    protected $fillable = ['asset_id','tanggal','alasan'];

    public function asset() {
        return $this->belongsTo(Asset::class);
    }
    protected static function booted()
{
    static::created(function ($penghapusan) {
        $penghapusan->asset()->update([
            'status' => 'dihapus',
        ]);
    });
}

}
