<?php

namespace App\Http\Controllers;
use App\Models\Comic;

use Illuminate\Http\Request;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;

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
    public function store(StoreComicRequest $request)
    {
        $form_data = $request->all();

        $comic = new Comic();

        $comic->fill($form_data);
        
        
        $comic->save();

        return redirect()->route('comics.show',$comic->id);
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
    public function update(UpdateComicRequest $request,Comic $comic)
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
