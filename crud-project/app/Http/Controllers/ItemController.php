<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Models\Category;


class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::all();
        return view('items.index', compact('items'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('items.create');
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
          
        ]);

        Item::create($request->all());
        return redirect()->route('items.index')->with('success', 'Item created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        return view('items.show', compact('item'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Fetch the item along with its category
        $item = Item::findOrFail($id);

        // Fetch all categories to display in the dropdown
        $categories = Category::all();

        // Return the edit view with the item and categories
        return view('items.edit', compact('item', 'categories'));
    }


    /**
     * Update the specified resource in storage.
     */
    // app/Http/Controllers/ItemController.php

    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);

        // Find the item and update it
        $item = Item::findOrFail($id);
        $item->update($validated);

        // Redirect back to the item page with a success message
        return redirect()->route('items.show', $item->id)
            ->with('success', 'Item updated successfully.');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('items.index')->with('success', 'Item deleted successfully.');
    }
}
