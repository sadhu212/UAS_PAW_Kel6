<?php

namespace App\Http\Controllers;


use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('berita.index', [
            'news' => $news
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('berita.create');
    }

    public function halaman()
    {
        $news  = News::all();
        return view('berita.berita')->with('news', $news);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'thumbnail' => 'required|mimes:jpg,jpeg,png|max:2048',
        ]);

        $thumbnailName = time() . '.' . $request->thumbnail->extension();

        $request->thumbnail->move(public_path('uploads/foto'), $thumbnailName);
        $title = $request->title;
        $slug_title = $request->slug_title;

        News::create(['thumbnail' => $thumbnailName, 'title' => $title, 'slug_title' => $slug_title]);

        return  redirect()->route('news.index')
            ->with('success', 'You have successfully upload file.')
            ->with('berita', $thumbnailName);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = News::find($id);
        if (!$users) return redirect()->route('berita.index')
            ->with('error_message', 'User dengan id' . $id . ' tidak ditemukan');
        return view('berita.edit', [
            'user' => $users
        ]);
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
        if (empty($request->file('thumbnail'))) {
            $nama_file=$request->old_image_name;
        } 
        else {
            $file_path = public_path().'/uploads/foto/'.$request->old_image_name;
            unlink($file_path);
            $file=$request->file('thumbnail');
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'uploads/foto';
            $file->move($tujuan_upload,$nama_file);
        }

        $data_team = array(
            'title' => $request->title,
            'thumbnail' => $nama_file,
            'slug_title' => $request->slug_title
        );
        $data = News::find($id);
        $data->update($data_team);
        return redirect(route('news.index'));
        
    }


    /**
     * Remove the specified resource from storage.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $news = News::find($id);
        if ($news) $news->delete();
        return redirect()->route('news.index')
            ->with('success_message', 'Berhasil menghapus user');
    }
}
