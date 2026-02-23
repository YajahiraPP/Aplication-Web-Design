<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $fillable = ['nombre','precio','categoria_id'];

public function categoria()
{
    return $this->belongsTo(Categoria::class);
}
}
