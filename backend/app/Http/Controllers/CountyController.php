<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCountyRequest;
use App\Http\Requests\UpdateCountyRequest;
use App\Http\Resources\CountyResource;
use App\Models\County;

class CountyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CountyResource::collection(County::with('trees')->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCountyRequest $request)
    {
        return new CountyResource(County::create($request->validated())->load('trees'));
    }

    /**
     * Display the specified resource.
     */
    public function show(County $county)
    {
        return new CountyResource($county->load('trees'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCountyRequest $request, County $county)
    {
        $county->update($request->validated());
        return new CountyResource($county->load('trees'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(County $county)
    {
        $county->delete();
        return response()->noContent();
    }
}
