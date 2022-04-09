<?php

namespace App\Exports;

use App\Models\Result;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ResultExport implements FromView
{
    public function view(): View
    {
        return view('dashboard.cetak', [
            'result' => Result::join('konsultasi', 'result.id_konsultasi', '=', 'konsultasi.id')->get()
        ]);
    }
}
