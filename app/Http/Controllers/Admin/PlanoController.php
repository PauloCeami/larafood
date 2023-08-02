<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use \App\Models\Planos;
use Illuminate\Http\Request;
use \App\Http\Requests\StoreUpdatePlanoRequest;

class PlanoController extends Controller {

    protected $plans;

    public function __construct(Planos $planos) {
        $this->plans = $planos;
    }

    public function index() {
        $data = $this->plans::paginate(5);
        return view('admin.pages.planos.index', [
            'data' => $data
        ]);
    }

    public function create() {
        return view('admin.pages.planos.create');
    }

    public function store(StoreUpdatePlanoRequest $request) {

//        $plano->plan_nome = $request->input('plan_nome');
//        $plano->plan_preco = $request->input('plan_preco');
//        $plano->plan_descricao = $request->input('plan_descricao');
//        $plano->plan_url = Str::kebab($plano->plan_nome);
//        $plano->save();


        $data = $request->all();
        $this->plans->create($data);
        return redirect()->route('planos.index');
    }

    public function show($id) {

        $plano = Planos::where('plan_id', $id)->first();
        if (!$plano)
            return redirect()->back();

        return view('admin.pages.planos.show', [
            'plano' => $plano
        ]);
    }

    public function edit($id) {
        $plano = Planos::where('plan_id', $id)->first();
        if (!$plano)
            return redirect()->back();

        return view('admin.pages.planos.edit', [
            'plano' => $plano
        ]);
    }

    public function update(StoreUpdatePlanoRequest $request, $id) {

        $plano = Planos::where('plan_id', $id)->first();
        if (!$plano)
            return redirect()->back();

//        $plano->plan_nome = $request->input('plan_nome');
//        $plano->plan_preco = $request->input('plan_preco');
//        $plano->plan_descricao = $request->input('plan_descricao');
//        $plano->plan_url = Str::kebab($plano->plan_nome);
//        $plano->save();

        $plano->update($request->all());
        return redirect()->route('planos.index');
    }

    public function destroy($id) {

        $deleted = Planos::where('plan_id', $id)->delete();
        if ($deleted == 0)
            return redirect()->back();

        return redirect()->route('planos.index');
    }

    public function search(Request $request) {

        return view('admin.pages.planos.index', [
            'data' => Planos::search($request->filter),
            'filter' => $request->except('_token')
        ]);
    }
}
