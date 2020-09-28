<?php

namespace App\Http\Controllers;

use App\Pagamento;
use Illuminate\Http\Request;

class PagamentoController extends Controller
{
    public function index() {
        $pagamenti = pagamento::all();

        return view('pagamenti', compact('pagamenti'));

    }

    public function destroy($id) {

        $pagamento = Pagamento::findOrFail($id);
        $pagamento -> delete();

        return redirect() -> route('pagamenti.index');
    }
    public function edit($id) {

        $pagamento = Pagamento::findOrFail($id);
        return view('pagamento-edit', compact('pagamento'));

    }

    public function update(Request $request, $id) {

        $data = $request -> all();
        $pagamento = Pagamento::findOrFail($id);
        $pagamento -> update($data);

        return redirect() -> route('pagamenti.index');

    }
}
