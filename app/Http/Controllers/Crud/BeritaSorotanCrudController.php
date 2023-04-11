<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use App\Models\Master\BeritaSorotan;
use App\Models\master\KategoriBerita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Carbon\Carbon;
use PDF;
use DateTime;
use Illuminate\Database\Schema\ForeignKeyDefinition;
use PhpParser\Node\Stmt\Foreach_;

class BeritaSorotanCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['beritasorotancrud'] = BeritaSorotan::get();
        return view('crud.beritasorotandata.beritasorotandata', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['kategori'] = KategoriBerita::get();
        $data['berita_sorotan'] = BeritaSorotan::get();
        return view('crud.beritasorotandata.tambahberitasorotandata', $data);
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
            'kategberita_id' => 'required',
            'tag' => 'required',
            'banner' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
            'content' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $image = $request->file('banner');
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        $path = public_path('/img');

        $image->move($path, $imageName);

        BeritaSorotan::create([
            'title' => $request->title,
            'kategberita_id' => $request->kategberita_id,
            'banner' => $imageName,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'content' => $request->content,
            'tag' => implode(',', $request->tag)

        ]);
        //         $beritaSorotan = new BeritaSorotan();
        // $beritaSorotan->title = $request->title;
        // $beritaSorotan->kategberita_id = $request->kategberita_id;
        // $beritaSorotan->banner = $imageName;
        // $beritaSorotan->content = $request->content;
        // $beritaSorotan->tag = json_encode($request->tag);
        // $beritaSorotan->save();


        return redirect('/beritasorotancrud')->with('success', 'Berhasil tambah data');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return request()->all;
        $data['berita'] = KategoriBerita::get();
        $data['beritasorotancrud'] = BeritaSorotan::where('id', $id)->first();
        $data['beritasorotancrud']->tags = explode(',', $data['beritasorotancrud']->tags);

        return view('crud.beritasorotandata.editberitasorotandata', $data);
        // $beritasorotancrud[0]->tags
        // $data['berita'] = KategoriBerita::get();
        // $data['beritasorotancrud'] = BeritaSorotan::where('id', $id)->first();
        // foreach ($data['beritasorotancrud'] as $key => $value){
        //     $value-> tags = explode(',', $value-> tags);
        // }
        // return view('crud.beritasorotandata.editberitasorotandata', $data);

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
            'kategberita_id' => 'required',
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

            BeritaSorotan::where('id', $id)->update([
                'title' => $request->title,
                'kategberita_id' => $request->kategberita_id,
                'tag' => $request->tag,
                'banner' => $imageName,
                'content' => $request->content,
            ]);
        } else {
            BeritaSorotan::where('id', $id)->update([
                'title' => $request->title,
                'kategberita_id' => $request->kategberita_id,
                'tag' => $request->tag,
                'content' => $request->content,
            ]);
        }

        return redirect('/beritasorotancrud')->with('success', 'Berhasil tambah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BeritaSorotan::where('id', $id)->delete();
        return redirect('/beritasorotancrud');
    }
}
