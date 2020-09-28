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
}
