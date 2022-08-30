<?php

namespace App\Models;

use App\Models\ItemType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'item';
    protected $fillable = ["item_type_id", "kode_barang", "stock", "harga", "nama_barang"];

    public function itemType()
    {
        return $this->belongsTo(ItemType::class);
    }
}
