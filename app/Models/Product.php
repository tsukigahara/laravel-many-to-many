<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [

        'code',
        'name',
        'description',
        'price',
        'weight',
    ];

    public function typology()
    {
        return $this->belongsTo(Typology::class);
    }
    public function categories()
    {
        return $this->BelongsToMany(Category::class);
    }
}
