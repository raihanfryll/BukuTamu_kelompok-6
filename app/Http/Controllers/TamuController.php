<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    public function index()
    {
        $tamus = Tamu::latest()->get();
        return view('tamu.index', compact('tamus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'pesan' => 'required',
        ]);

        Tamu::create($request->all());

        return redirect('/')->with('success', 'Pesan berhasil dikirim!');
    }
}
