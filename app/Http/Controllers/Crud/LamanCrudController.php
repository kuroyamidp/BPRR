<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use App\Models\Master\laman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Carbon\Carbon;
use PDF;
use DateTime;

class LamanCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['lamancrud'] = laman::get();
        return view('crud.lamandata.lamandata',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.lamandata.tambahlamandata');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
            'status' => 'required',
            'title' => 'required',
            'banner' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required',
        ]);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }

        $image = $request->file('banner');
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        $path = public_path('/img');

        $image->move($path, $imageName);

        laman::create([
            'tanggal_mulai' => Carbon::parse($request->tanggal_mulai)->format('Y-m-d'),
            'tanggal_selesai' => Carbon::parse($request->tanggal_selesai)->format('Y-m-d'),
            'status' => $request->status,
            'title' => $request->title,
            'banner' => $imageName,
            'content' => $request->content,
        ]);

        return redirect('/lamancrud')->with('success', 'Berhasil tambah data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['lamancrud'] = laman::where('id', $id)->first();
        return view('crud.lamandata.editlamandata',$data);
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
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
            'status' => 'required',
            'title' => 'required',
            'content' => 'required',
            'banner' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }
        
        $image = $request->file('banner');
        
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('/img');
            $image->move($path, $imageName);
        }
        
        Laman::where('id', $id)->update([
            'tanggal_mulai' => Carbon::parse($request->tanggal_mulai)->format('Y-m-d'),
            'tanggal_selesai' => Carbon::parse($request->tanggal_selesai)->format('Y-m-d'),
            'status' => $request->status,
            'title' => $request->title,
            'content' => $request->content,
            'banner' => $imageName,
        ]);
        
        return redirect('/lamancrud')->with('success', 'Berhasil tambah data');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        laman::where('id', $id)->delete();
        return redirect('/lamancrud');
    }
}
