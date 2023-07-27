<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use \App\Models\Planos;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PlanoController extends Controller {

    public function index() {
        $data = Planos::paginate(10);
        return view('admin.pages.planos.index', [
            'data' => $data
        ]);
    }

    public function create() {
        return view('admin.pages.planos.create');
    }

    /**
     * Store a new Plano.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        // validations

        $plano = new Planos();
        $plano->plan_nome = $request->input('plan_nome');
        $plano->plan_preco = $request->input('plan_preco');
        $plano->plan_descricao = $request->input('plan_descricao');
        $plano->plan_url = Str::kebab($request->input('plan_nome'));
        $plano->save();

        return redirect()->route('planos.index');
    }
}
