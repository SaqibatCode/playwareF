<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function getCategoriesPage()
    {
        $ParentCategories = Categories::all();

        $categories = Categories::root()->paginate(10);

     


        return view('admin.pages.products.categories.categories', [
            'title' => 'Categories',
            'parent' => $ParentCategories,
            'categories' => $categories
            
        ]);
    }

    public function createCategory(Request $request)
    {
        // dd($request->all());

        $validate = $request->validate([
            'categoryName' => 'required|String',
            'CategorySlug' => 'nullable|String',
            'ParentCategory' => 'nullable|String',
            'CategoryDescription' => 'nullable|String',
            'image' => 'nullable|mimes:png,jpg,jpeg'
        ]);

        $category = new Categories;
        $category->name = $validate['categoryName'];
        if ($request->has('CategorySlug')) {
            $category->slug = $validate['CategorySlug'];
        } else {
            $category->slug = $validate['categoryName'];
        }
        if ($request->input('ParentCategory')) {
            $category->parent_id = $validate['ParentCategory'];
        }
        if ($request->input('CategoryDescription')) {
            $category->description = $validate['CategoryDescription'];
        }

        if ($request->has('image')) {
            $folderPath = 'Category/';

            // Create the folder if it doesn't exist
            if (!file_exists(public_path($folderPath))) {
                mkdir(public_path($folderPath), 0777, true);
            }

            $image = $request->file('image');
            $name = time() . $validate['categoryName'] . '_' . 'Category' . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($folderPath), $name);

            $category->image = $name;
        }


        $category->save();

        return back()->with('success', $request->input('categoryName') . ' Created Successfully');
    }
}
