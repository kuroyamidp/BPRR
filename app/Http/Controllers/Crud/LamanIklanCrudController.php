<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use App\Models\Master\IklanLaman;
use App\Models\master\KategoriBerita;
use App\Models\master\KategoriIklan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Carbon\Carbon;
use PDF;
use DateTime;

class LamanIklanCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['lamaniklancrud'] = IklanLaman::get();
        return view('crud.lamaniklandata.lamaniklandata',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['lamaniklancrud'] = KategoriIklan::get();
        return view('crud.lamaniklandata.tambahlamaniklandata',$data);
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
            'title' => 'required',
            'kategiklan_id' => 'required',
            'tag' => 'required',
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

        IklanLaman ::create([
            'title' => $request->title,
            'kategiklan_id' => $request->kategiklan_id,
            'tag' => $request->tag,
            'banner' => $imageName,
            'content' => $request->content,
        ]);
        

        return redirect('/lamaniklancrud')->with('success', 'Berhasil tambah data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['iklan'] = KategoriIklan::get();
        $data['lamaniklancrud'] = IklanLaman::where('id', $id)->first();
        return view('crud.lamaniklandata.editlamaniklandata',$data);
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
            'title' => 'required',
            'kategiklan_id' => 'required',
            'tag' => 'required',
            'banner' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required',
        ]);
        
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }
        
        $image = $request->file('banner');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('/img');
            $image->move($path, $imageName);
        
            IklanLaman::where('id', $id)->update([
                'title' => $request->title,
                'kategiklan_id' => $request->kategiklan_id,
                'tag' => $request->tag,
                'banner' => $imageName,
                'content' => $request->content,
            ]);
        } else {
            IklanLaman::where('id', $id)->update([
                'title' => $request->title,
                'kategiklan_id' => $request->kategiklan_id,
                'tag' => $request->tag,
                'content' => $request->content,
            ]);
        }
        
        return redirect('/lamaniklancrud')->with('success', 'Berhasil tambah data');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        IklanLaman::where('id', $id)->delete();
        return redirect('/lamaniklancrud');
    }
}
