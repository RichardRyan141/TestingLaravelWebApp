<?php

namespace App\Http\Controllers;

use App\Models\nft;
use App\Models\Pengguna;
use Illuminate\Http\Request;

class NftController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nfts = nft::all();
        return view('nft.index', compact('nfts'));    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $penggunas = Pengguna::all();
        $nfts = nft::all();
        return view('nft.create', compact('penggunas', 'nfts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image_link' => 'required|url',
            'owner_id' => 'required|exists:penggunas,id',
        ],
        [
            'name.required' => 'Name can\'t be empty!',
            'description.required' => 'Description can\'t be empty!',
            'image_link.required' => 'Image Link can\'t be empty!',
            'image_link.url' => 'Image Link must be a URL',
            'owner_id.required' => 'Owner id can\'t be empty!!',
        ]);

        nft::create([
            'name' => $request->name,
            'description' => $request->description,
            'image_link' => $request->image_link,
            'owner_uid' => $request->owner_uid,
        ]);
    
        return redirect('/nft');        
    }

    /**
     * Display the specified resource.
     */
    public function show(nft $nft)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(nft $nft)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, nft $nft)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(nft $nft)
    {
        //
    }
}
