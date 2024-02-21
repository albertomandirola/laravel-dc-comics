<?php

namespace App\Http\Controllers;
use App\Models\Comic;

use Illuminate\Http\Request;

class ComicController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        $socials = config('social');
        $footer_lists = config('footer');
        return view('comics.index' , compact('comics','socials', 'footer_lists'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $socials = config('social');
        $footer_lists = config('footer');
        return view('comics.create' , compact('socials', 'footer_lists'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comic = $request->all();

        $NewComic = new Comic();
        $NewComic->title = $comic['title'];
        $NewComic->description = $comic['description'];
        $NewComic->thumb = $comic['thumb'];
        $NewComic->price = $comic['price'];
        $NewComic->series = $comic['series'];
        $NewComic->sale_date = $comic['sale_date'];
        $NewComic->type = $comic['type'];
        $NewComic->artists = $comic['artists'];
        $NewComic->writers = $comic['writers'];
        
        $NewComic->save();

        return redirect()->route('comics.show',$NewComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);
        $socials = config('social');
        $footer_lists = config('footer');
        return view('comics.show' , compact('comic','socials', 'footer_lists'));
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
        //
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
