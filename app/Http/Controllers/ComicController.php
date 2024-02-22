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
        $form_data = $request->all();

        $NewComic = new Comic();
        $NewComic->title = $form_data['title'];
        $NewComic->description = $form_data['description'];
        $NewComic->thumb = $form_data['thumb'];
        $NewComic->price = $form_data['price'];
        $NewComic->series = $form_data['series'];
        $NewComic->sale_date = $form_data['sale_date'];
        $NewComic->type = $form_data['type'];
        $NewComic->artists = $form_data['artists'];
        $NewComic->writers = $form_data['writers'];
        
        $NewComic->save();

        return redirect()->route('comics.show',$NewComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
       
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
    public function edit(Comic $comic)
    {
        $socials = config('social');
        $footer_lists = config('footer');
        return view('comics.edit', compact('comic','socials', 'footer_lists'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Comic $comic)
    {
        $data = $request->all();

        $comic->update($data);
        return redirect()->route('comics.show', ['comic' => $comic]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        
        $comic -> delete();
        return redirect()->route('comics.index');
    }
}
