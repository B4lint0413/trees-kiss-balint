<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTreeRequest;
use App\Http\Requests\UpdateTreeRequest;
use App\Http\Resources\TreeResource;
use App\Models\Tree;

class TreeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TreeResource::collection(Tree::with('county')->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTreeRequest $request)
    {
        return new TreeResource(Tree::create($request->validated())->load('county'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Tree $tree)
    {
        return new TreeResource($tree->load('county'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTreeRequest $request, Tree $tree)
    {
        $tree->update($request->validated());
        return new TreeResource($tree->load('county'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tree $tree)
    {
        $tree->delete();
        return response()->noContent();
    }
}
