<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;


class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
            $links = config('menu');
            $bannerItems = config('bannerItems');
            $DCcomicsLinks = config('DCcomicsLinks');
            $DClinks = config('DClinks');
            $sites = config('sites');
    
            $comics = Comic::all();
        
            return view('comics.index', 
            [
                'links' => $links,
                'comics' => $comics,
                'bannerItems' => $bannerItems,
                'DCcomicsLinks' => $DCcomicsLinks ,
                'DClinks' => $DClinks,
                'sites' => $sites
            ]);
        
        
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
        $data = $request->all();

        $new_comic = new Comic;

        $new_comic->fill($data);

        $new_comic->save();

        return redirect()->route('comics.show', $new_comic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        $links = config('menu');
        $bannerItems = config('bannerItems');
        $DCcomicsLinks = config('DCcomicsLinks');
        $DClinks = config('DClinks');
        $sites = config('sites');


        //$comic = Comic::findOrFail($id);
        
    
        return view('comics.show', 
        [
            'links' => $links,
            'bannerItems' => $bannerItems,
            'DCcomicsLinks' => $DCcomicsLinks ,
            'DClinks' => $DClinks,
            'sites' => $sites,
            'comic' => $comic,
            
        ]);
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //$comic =  Comic::findOrFail($id);

        return view('comics.edit',compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
       //$comic = Comic::findOrFail($id);

       $data = $request->all();

       //$comic->fill($data);

       $comic->update($data);

       return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
       // $comic = Comic::findOrFail($id);

        $comic->delete();

        return redirect()->route('comics.index');
    }
}
