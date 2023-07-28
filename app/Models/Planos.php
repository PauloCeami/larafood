<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planos extends Model {

    use HasFactory;

    protected $fillable = ['plan_nome', 'plan_url', 'plan_preco', 'plan_descricao'];

    public static function search($filter) {
        return Planos::where('plan_nome', 'LIKE', "%{$filter}%")
                        ->orWhere('plan_descricao', 'LIKE', "%{$filter}%")
                        ->paginate();
    }
}
