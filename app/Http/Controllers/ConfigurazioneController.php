<?php

namespace App\Http\Controllers;

use App\Configurazione;
use Illuminate\Http\Request;

class ConfigurazioneController extends Controller
{
    public function index() {

        $configurazioni = Configurazione::all();
        return view('configurazioni', compact('configurazioni'));
    }

    public function show($id) {
        $conf = Configurazione::findOrFail($id);
        return view('configurazione', compact('conf'));
    }

    public function create() {

        return view('create-configurazione');

    }

    public function store(Request $request) {
        $data = $request -> all();
        $configurazione = Configurazione::create($data);

        return redirect() ->route('conf-index');
    }


}
