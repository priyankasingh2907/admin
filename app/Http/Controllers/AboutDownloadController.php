<?php

namespace App\Http\Controllers;

use App\Models\about_download;
use App\Http\Requests\Storeabout_downloadRequest;
use App\Http\Requests\Updateabout_downloadRequest;

class AboutDownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function download()
    {
        $file= public_path(). "/pdf/";  //path of your directory
        $headers = array(
            'Content-Type: application/pdf',
        );
         return Response::download($file.$pdfName, 'filename.pdf', $headers); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storeabout_downloadRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(about_download $about_download)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(about_download $about_download)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updateabout_downloadRequest $request, about_download $about_download)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(about_download $about_download)
    {
        //
    }
}
