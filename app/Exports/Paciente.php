<?php
namespace App\Exports;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class Paciente implements FromView
{
    public function view (): View  {
        return view('exports.pacientes', [
            'pacientes' => \App\Paciente::all()
        ]);
    }
}