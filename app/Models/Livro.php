<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $table = 'livros';
    protected $fillable = ['titulo', 'id_autor', 'id_categoria'];

    public function autor()
    {
        return $this->belongsTo(Autor::class, 'id_autor');
    }
}
