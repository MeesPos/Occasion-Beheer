<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Auto;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = ['soort', 'auto_id'];

    public function auto() {
        return $this->hasMany(Auto::class, 'id', 'auto_id');
    }
}
