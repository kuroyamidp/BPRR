<?php

namespace App\Http\Controllers\crud;

use App\Http\Controllers\Controller;
use App\Models\Master\sorotan;
use App\Models\Master\BeritaSorotan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Carbon\Carbon;
use PDF;
use DateTime;

class SorotanCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['sorotancrud'] = sorotan::get();
        return view('crud.sorotandata.sorotandata',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['kategori'] = BeritaSorotan::get();
        $data['iklans'] = sorotan::get();
        return view('crud.sorotandata.tambahsorotandata',$data);
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
            'title_id' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
        ]);

        sorotan::create([
            'title_id' => $request->title_id,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,

        ]);
        

        return redirect('/sorotancrud')->with('success', 'Berhasil tambah data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['iklan'] = BeritaSorotan::get();
        $data['iklantag'] = sorotan::where('id', $id)->get();
        foreach ($data['sorotancrud'] as $key => $value){
            $value-> tags = explode(',', $value-> tags);
        }
        return view('crud.sorotandata.editsorotandata',$data);
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
        
            sorotan::where('id', $id)->update([
                'title' => $request->title,
                'kategiklan_id' => $request->kategiklan_id,
                'tag' => $request->tag,
                'banner' => $imageName,
                'content' => $request->content,
            ]);
        } else {
            sorotan::where('id', $id)->update([
                'title' => $request->title,
                'kategiklan_id' => $request->kategiklan_id,
                'tag' => $request->tag,
                'content' => $request->content,
            ]);
        }
        
        return redirect('/sorotancrud')->with('success', 'Berhasil tambah data');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        sorotan::where('id', $id)->delete();
        return redirect('/sorotancrud');
    }
}
