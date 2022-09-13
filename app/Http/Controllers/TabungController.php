<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TabungController extends Controller
{
    private $jari2, $tinggi, $hasil;

    public function form(): View
    {
        return view('tabung.form');
    }

    public function process(Request $request): View
    {
        $this->jari2 = $request->input('diameter') / 2; // name di input nya harus sama yaa
        $this->tinggi = $request->input('tinggi'); // name di input nya harus sama yaa
        $this->hasil = (22 / 7) * pow($this->jari2, 2) * $this->tinggi;

        return view('tabung.form', [
            'hasil' => $this->hasil
        ]);
    }
}
