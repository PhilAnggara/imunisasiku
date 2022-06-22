<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\PanduanIbu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class MainController extends Controller
{
    public function beranda()
    {
        // Cek apakah pengguna adalah Admin, jika iya maka lempar ke beranda admin
        if (auth()->user()->role == 'Admin') {

            return view('pages.beranda');

        // Jika pengguna adalah ibu maka lempar ke beranda ibu
        } else {

            $anak = auth()->user()->anak;

            // Jika pengguna telah mengisi data anak maka lempar ke beranda ibu
            if ($anak) {
            
                $bulanIni = Carbon::parse($anak->tgl_lahir)->diffInMonths(Carbon::now()->endOfMonth());
    
                $namaBulan = collect();
                $bb = collect();
                $tb = collect();
                $lk = collect();
                $data = ['bb'=> $bb, 'tb' => $tb, 'lk' => $lk];
                
                $j = 0;
                for ($i = 0; $i <= $bulanIni; $i++) { 
                    $namaBulan->push(
                        Carbon::parse($anak->tgl_lahir)->addMonth($i)->isoFormat('MMMM').' ('.$i.' bulan)'
                    );
                    if (array_key_exists($j, $anak->pertumbuhan->all())) {
                        if (Carbon::parse($anak->pertumbuhan[$j]->tanggal)->isoFormat('MMMM') == Carbon::parse($anak->tgl_lahir)->addMonth($i)->isoFormat('MMMM')) {
                            $bb->push($anak->pertumbuhan[$j]->bb);
                            $tb->push($anak->pertumbuhan[$j]->tb);
                            $lk->push($anak->pertumbuhan[$j]->lk);
                            $j++;
                        } else {
                            $bb->push(null);
                            $tb->push(null);
                            $lk->push(null);
                        }
                    }
                }
                
                return view('pages.beranda-ibu', [
                    'anak' => $anak,
                    'namaBulan' => $namaBulan,
                    'data' => $data,
                ]);
                
            // Jika pengguna belum mengisi data anak maka lempar ke form anak
            } else {
                return view('pages.daftar-anak');
            }
        }
    }

    public function penerimaImunisasi()
    {
        return view('pages.penerima-imunisasi');
    }

    public function gantiPassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if (Hash::check($request->current_password, auth()->user()->password)) {
            $user = User::find(auth()->user()->id);
            $user->password = Hash::make($request->password);
            $user->save();

            return redirect()->back()->with('success', 'Kata sandi anda berhasil diubah');
        }

        throw ValidationException::withMessages([
            'current_password' => 'Kata sandi anda salah'
        ]);
    }
}
