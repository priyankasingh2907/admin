<?php

namespace App\Http\Controllers;

use App\Models\join_us;
use App\Http\Requests\Storejoin_usRequest;
use App\Http\Requests\Updatejoin_usRequest;

class JoinUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.home.joinUs.joinUs');
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
    public function store(Storejoin_usRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(join_us $join_us)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(join_us $join_us)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatejoin_usRequest $request, join_us $join_us)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(join_us $join_us)
    {
        //
    }
}
