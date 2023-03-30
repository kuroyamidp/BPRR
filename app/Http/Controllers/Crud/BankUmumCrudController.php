<?php

namespace App\Http\Controllers\crud;

use App\Http\Controllers\Controller;
use App\Models\Master\BankUmum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Carbon\Carbon;
use PDF;
use DateTime;

class BankUmumCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['bankumumcrud'] = BankUmum::get();
        return view('crud.bankumumdata.bankumumdata',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.bankumumdata.tambahbankumumdata');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // if ($request->uid) {
        //     if ($request->hasFile('file')) {
        //         $validator = Validator::make($request->all(), [
        //             'npm' => 'required',
        //             'nama' => 'required',
        //             'tanggal_sidang' => 'required',
        //             'jam' => 'required',
        //             'file' => 'required'
        //         ]);

        //         // response error validation
        //         if ($validator->fails()) {
        //             return Redirect::back()->withErrors($validator);
        //         }
        //         $name = $request->file('file')->getClientOriginalName();
        //         $filename = time() . '-' . $name;
        //         $file = $request->file('file');
        //         $file->move(public_path('Document'), $filename);

        //         DaftarSidangModel::where('id', $request->id)->update([
        //             'nama' => $request->nama,
        //             'npm' => $request->npm,
        //             'tanggal_sidang' => Carbon::parse($request->tanggal_sidang)->format('Y-m-d'),
        //             'jam' => $request->jam,
        //             'file' => $filename,
        //         ]);
        //         return redirect('/daftarsidang')->with('success', 'Berhasil edit data');
        //     } else {
        //         $validator = Validator::make($request->all(), [
        //             'npm' => 'required',
        //             'nama' => 'required',
        //             'tanggal_sidang' => 'required',
        //             'jam' => 'required',
        //         ]);
        //         if ($validator->fails()) {
        //             return Redirect::back()->withErrors($validator);
        //         }

        //         DaftarSidangModel::where('id', $request->id)->update([
        //             'nama' => $request->nama,
        //             'npm' => $request->npm,
        //             'tanggal_sidang' => Carbon::parse($request->tanggal_sidang)->format('Y-m-d'),
        //             'jam' => $request->jam,
        //         ]);
        //         return redirect('/daftarsidang')->with('success', 'Berhasil edit data');
        //     }
        // } else {
        //     $validator = Validator::make($request->all(), [
        //         'npm' => 'required',
        //         'nama' => 'required',
        //         'tanggal_sidang' => 'required',
        //         'jam' => 'required',
        //         'file' => 'required'
        //     ]);

        //     // response error validation
        //     if ($validator->fails()) {
        //         return Redirect::back()->withErrors($validator);
        //     }
        //     if ($request->hasFile('file')) {
        //         $name = $request->file('file')->getClientOriginalName();
        //         $filename = time() . '-' . $name;
        //         $file = $request->file('file');
        //         $file->move(public_path('Document'), $filename);

        //         DaftarSidangModel::create([
        //             'nama' => $request->nama,
        //             'npm' => $request->npm,
        //             'tanggal_sidang' => Carbon::parse($request->tanggal_sidang)->format('Y-m-d'),
        //             'jam' => $request->jam,
        //             'file' => $filename,
        //         ]);
        //         return redirect('/daftarsidang')->with('success', 'Berhasil tambah data');
        //     } else {
        //         DaftarSidangModel::create([
        //             'nama' => $request->nama,
        //             'npm' => $request->npm,
        //             'tanggal_sidang' => Carbon::parse($request->tanggal_sidang)->format('Y-m-d'),
        //             'jam' => $request->jam,
        //         ]);
        //         return redirect('/daftarsidang')->with('success', 'Berhasil tambah data');
        //     }
        // }

        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required',
            'gambar' =>'required',

        ]);

        // response error validation
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }

        BankUmum::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal' => Carbon::parse($request->tanggal)->format('Y-m-d'),
            'gambar' => $request->gambar,
        ]);

        return redirect('/bankumumcrud')->with('success', 'Berhasil tambah data');
     // $directory = public_path('excel');
     // if (!is_dir($directory)) {
     //     mkdir($directory, 0755, true);
     // }

     // if ($request->hasFile('file')) {
     //     $name = $request->file('file')->getClientOriginalName();
     //     $filename = time() . '-' . $name;
     //     $file = $request->file('file');

     //     $file->move($directory, $filename);

     //     DaftarSidangModel::create([
     //         'nama' => $request->nama,
     //         'npm' => $request->npm,
     //         'tanggal_sidang' => Carbon::parse($request->tanggal_sidang)->format('Y-m-d'),
     //         'jam' => $request->jam,
     //         'file' => $filename,
     //     ]);
     // } else {
     //     $validator = Validator::make($request->all(), [
     //         'npm' => 'required',
     //         'nama' => 'required',
     //         'tanggal_sidang' => 'required',
     //         'jam' => 'required',
     //     ]);

     //     if ($validator->fails()) {
     //         return Redirect::back()->withErrors($validator);
     //     }

     //     DaftarSidangModel::create([
     //         'nama' => $request->nama,
     //         'npm' => $request->npm,
     //         'tanggal_sidang' => Carbon::parse($request->tanggal_sidang)->format('Y-m-d'),
     //         'jam' => $request->jam,
     //     ]);
     // }

     // return redirect('/daftarsidang')->with('success', 'Berhasil tambah data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['bankumumcrud'] = BankUmum::where('id', $id)->first();
        return view('crud.bankumumdata.editbankumumdata',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required',
            'gambar' =>'required',

        ]);

        // response error validation
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }

        BankUmum::where('id', $id)->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'gambar' => $request->gambar,
        ]);

        return redirect('/bankumumcrud')->with('success', 'Berhasil tambah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BankUmum::where('id', $id)->delete();
        return redirect('/bankumumcrud');
    }
}
