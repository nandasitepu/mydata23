<?php

namespace App\Http\Controllers\Posting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog\Posting;

class PostingController extends Controller

{

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Posting::all();
        return view('posting.index',compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('posting.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'pembuka' => 'required',
            'isi' => 'required',
            'gambar' => 'required',
            // masalah
            'kategori' => '',
            // ok
            'penulis' => '',
            // masalah
            'created_at' => '',
        ]);

        Posting::create($request->all());


        return redirect()->route('posting.index')
                        ->with('success','Posting created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Posting::find($id);
        return view('posting.show',compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Posting::find($id);
        return view('posting.edit')->with('post', $post);

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
        $this->validate($request, [
            'judul' => 'required',
            'pembuka' => 'required',
            'isi' => 'required',
            'gambar' => 'required',
            // masalah
            'kategori' => '',
            // ok
            'penulis' => '',
            // masalah
            'created_at' => '',
        ]);

        Posting::find($id)->update($request->all());

        return redirect()->route('posting.index')
                        ->with('success','Posting created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
