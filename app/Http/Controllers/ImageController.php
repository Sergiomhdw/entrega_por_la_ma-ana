<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        //
        return view("includes.image.nueva", compact('user'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validator_url = Validator::make($request->all(), [
        //     'image_path' => 'url'
        // ]);

        // if ($validator_url->fails()) {
        //     return redirect('/')->withErrors($validator_url)->with('error', 'Tiene que ser una una url.');
        // }
        // $validator_des = Validator::make($request->all(), [
        //     'description' => 'required'
        // ]);

        // if ($validator_des->fails()) {
        //     return redirect('/')->withErrors($validator_des)->with('error', 'Tiene que tener una descripción no vacia');
        // }
        // Image::create($request->all();
        // return redirect()->route('/')->with('success', 'Enlace creado correctamente.');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
        return view("includes.edit", compact('image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        $validator_des = Validator::make($request->all(), [
            'description' => 'required'
        ]);

        if ($validator_des->fails()) {
            return redirect('/')->withErrors($validator_des)->with('error', 'Tiene que tener una descripción no vacia');
        }
    
        $image->description = $request->description;
        $image->save();
        return redirect()->route('home')->with('success','Se ha actualizado su descripción');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        if( $image->delete()){
            $mensaje =  'Enlace eliminado correctamente el id:'. $image->id." description: ".$image->description;
            return redirect()->route('home')->with('success', $mensaje);
        }else{
            return redirect()->route('home')->with('error', "No se ha podido borrar el id: ". $image->id);
        }
     
    }
    
}
