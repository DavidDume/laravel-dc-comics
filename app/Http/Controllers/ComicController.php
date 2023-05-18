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
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
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
            'title' => 'required|max:110',
            'description'=> 'nullable|max:65535',
            'thumb' => 'required|max:255',
            'series'=> 'required|max:50',
            'type'=>'required|max:50',
            'price'=>'required|max:10',
            'sale_date'=>'required',
        ]);

        $data = $request->all();

        $newComic = new Comic();

        $newComic->fill($data);

        

        $newComic->save();

        return redirect()->route('comics.show', ['comic' => $newComic->id])->with('status', 'Comic aggiornato');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.edit', compact('comic'));
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

        $request->validate([
            'title' => 'required|max:110',
            'description'=> 'nullable|max:65535',
            'thumb' => 'required|max:255',
            'series'=> 'required|max:50',
            'type'=>'required|max:50',
            'price'=>'required|max:10',
            'sale_date'=>'required',
        ]);

        $comic = Comic::findOrFail($id);
        $data = $request->all();

        $comic->update($data);

        return redirect()->route('comics.show', ['comic' => $comic->id])->with('status', 'Comic aggiornato');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
