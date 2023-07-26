<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planos extends Model {

    use HasFactory;

    protected $fillable = ['plan_nome', 'plan_url', 'plan_preco', 'plan_descricao'];
}
