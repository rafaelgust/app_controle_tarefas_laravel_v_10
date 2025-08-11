<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;

    protected $table = "tarefas"; // laravel identifica sozinho, mas é uma boa prática definir

    protected $fillable = [
        'titulo',
        'descricao',
        'data_limite',
        'user_id'
    ];

    public function user(){
        //belongsTo  pertence a

        return $this->belongsTo(User::class);
    }
}
