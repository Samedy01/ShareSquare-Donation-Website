<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\ItemCategory;

class ItemCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = ItemCategory::all();

        return view('item_categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('item_categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $request->validate([
            'name' => 'required|max:20',
            'is_enabled' => 'required|boolean',
        ]);
        ItemCategory::create($request->all());

        return redirect()->route('admin.item_categories.index')->with('success', 'Item category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ItemCategory $itemCategory)
    {
        return view('admin.item_categories.edit', compact('itemCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ItemCategory $itemCategory)
    {
        $request->validate([
            'name' => 'required|max:20',
            'is_enabled' => 'required|boolean',
        ]);

        $itemCategory->update($request->all());

        return redirect()->route('admin.item_categories.index')->with('success', 'Item category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ItemCategory $itemCategory)
    {
        $itemCategory->delete();

        return redirect()->route('admin.item_categories.index')->with('success', 'Item category deleted successfully.');
    }
}
