<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{
    public function getCategoriesPage()
    {
        $ParentCategories = Categories::all();

        $categories = Categories::root()->get();




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
            'CategorySlug' => 'nullable|String|unique:categories,slug',
            'ParentCategory' => 'nullable|String',
            'CategoryDescription' => 'nullable|String',
            'image' => 'nullable|mimes:png,jpg,jpeg'
        ],[
            'CategorySlug.unique' => 'Please Enter Unique Slug, This Already Exists, Enter Something Meaningfull for E.g Apple-Accesscories'
        ]);

        $category = new Categories;
        $category->name = $validate['categoryName'];
        if ($request->has('CategorySlug')) {
            $category->slug = Str::slug($validate['CategorySlug'], '-');
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

        $category->status = 1;

        $category->save();

        return back()->with('success', $request->input('categoryName') . ' Created Successfully');
    }


    public function deleteCategory($id)
    {
        Categories::find($id)->delete();

        return back()->with(['success' => 'Category deleted successfully']);
    }
}
