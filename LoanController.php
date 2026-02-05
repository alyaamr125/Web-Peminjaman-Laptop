<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class LoanController extends Controller
{
    public function create()
    {
        return view('loans.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => ['required', 'string', 'max:100'],
            'npm'  => ['required', 'string', 'max:50'],
            'keterangan' => ['required', 'in:Normal,Laptop Laboratorium,Pengajuan Baru'],
        ]);

        Loan::create([
            'nama' => $request->nama,
            'npm' => $request->npm,
            'keterangan' => $request->keterangan,
            'tgl_pinjam' => \Carbon\Carbon::now(),
            'status' => 'Dipinjam',
        ]);

        return redirect()->route('loans.riwayat')->with('success', 'Berhasil meminjam laptop.');
    }

    public function riwayat()
    {
        $loans = Loan::orderByDesc('id')->get();
        return view('loans.riwayat', compact('loans'));
    }

    public function kembali(Loan $loan)
    {
        $loan->update([
            'tgl_kembali' => Carbon::now(),
            'status' => 'Sudah Kembali',
        ]);

        return redirect()->route('loans.riwayat')->with('success', 'Berhasil mengembalikan laptop.');
    }

    public function simpanJamMalam(Request $request, Loan $loan)
    {
        $request->validate([
            'jam_malam_mulai' => ['required'],
            'jam_malam_selesai' => ['required'],
        ]);

        $loan->update([
            'jam_malam_mulai' => $request->jam_malam_mulai,
            'jam_malam_selesai' => $request->jam_malam_selesai,
        ]);

        return redirect()->route('loans.riwayat')->with('success', 'Jam malam berhasil disimpan.');
    }
}
