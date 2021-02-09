<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categorie;

class Auto extends Model
{
    use HasFactory;

    protected $fillable = ['merk', 'type', 'bouwdatum', 'image', 'inkoop', 'verkoop', 'kenteken'];

    public function categorie() {
        return $this->hasMany(Categorie::class, 'auto_id', 'id');
    }
}
