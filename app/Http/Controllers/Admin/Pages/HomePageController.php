<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function getHomePageEditor()
    {
        $slide1 = Content::where('contentId', '1')->first();
        $slide2 = Content::where('contentId', '2')->first();
        $feature1 = Content::where('contentId', '3')->first();
        $feature2 = Content::where('contentId', '4')->first();
        return view('admin.pages.Edit.Home', [
            'title' => 'Edit Home Page',
            'slide1' => $slide1,
            'slide2' => $slide2,
            'feature1' => $feature1,
            'feature2' => $feature2
        ]);
    }

    public function UpdateContent(Request $request)
    {
        // dd($request->all());

        $validate = $request->validate([
            'MainHeading' => 'required|string',
            'HighlightText' => 'nullable|string',
            'PriceText' => 'nullable|string',
            'Amount' => 'nullable|string',
            'featuredText' => 'nullable|string',
            'ButtonText' => 'required|string',
            'ButtonLink' => 'required|string',
            'image' => 'required|mimes:png,jpeg'
        ]);

        $id = $request->input('id');
        $content = Content::find($id);


        if ($content) {

            $folderPath = 'Content';
            $contentImage = $request->file('image');
            $contentImageName = time() . '_' . 'Slide_image' . '.' . $contentImage->getClientOriginalExtension();
            $contentImage->move(public_path($folderPath), $contentImageName);

            $content->image = $contentImageName;
            if ($request->input('featuredText')) {
                $content->featureText = $validate['featuredText'];
            }
            $content->mainHeading = $validate['MainHeading'];
            $content->Highlight_Text = $validate['HighlightText'];
            if ($request->input('PriceText')) {
                $content->Price_Text = $validate['PriceText'];
            }
            if ($request->input('Amount')) {
                $content->Amount_Percentage = $validate['Amount'];
            }
            $content->ButtonText = $validate['ButtonText'];
            $content->ButtonLink = $validate['ButtonLink'];
            $content->save();

            return back()->with('success', 'Content Updated Successfully');
        } else {
            return back()->with('error', 'There is an error updating the content');
        }

    }
}
