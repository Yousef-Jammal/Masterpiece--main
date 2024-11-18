<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StorecategoriesRequest;
use App\Http\Requests\UpdatecategoriesRequest;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.tables.categories', compact('categories'));
    }

    /**
     * Show the form for creating a new category.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created category in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:categories|max:255',
        ]);

        Category::create([
            'name' => $request->name,
        ]);

        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    /**
     * Display the specified category.
     */
    public function show(Category $category)
    {
        // Display the category along with its associated products
        $products = $category->products()->paginate(10);
        return view('categories.show', compact('category', 'products'));
    }

    /**
     * Show the form for editing the specified category.
     */
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified category in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:categories,name,' . $request->this_id . '|max:255',
        ]);

        $category = Category::find($request->this_id);



        $category->update([
            'name' => $request->name,
        ]);

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified category from storage.
     */
    public function destroy(Request $request)
    {
        $category = Category::find($request->this_id);
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }
}
