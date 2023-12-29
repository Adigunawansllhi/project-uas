<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pengiriman extends Model
{
    use HasFactory;

    protected $fillable = [
        'resi', 'tgl_kirim', 'pengirim', 'rute_id', 'penerima', 'no_telp_penerima', 'kat_id', 'pcs', 'total_harga'
    ];

    public function rute(): BelongsTo
    {
        return $this->belongsTo(Rute::class, 'rute_id');
    }

    public function kat(): BelongsTo
    {
        return $this->belongsTo(Kategori::class, 'kat_id');
    }

    public static function generateResi()
    {
        $prefix = 'FE';
        $date = date('ym');

        $lastPengiriman = Self::select('resi')
            ->where('resi', 'LIKE', $prefix . $date . '%')
            ->orderBy('resi', 'desc')
            ->first();

        $urut = $lastPengiriman ? (int)substr($lastPengiriman->resi, 8) + 1 : 1;
        $resi = $prefix . $date . sprintf('%04d', $urut);

        return $resi;
    }
}
