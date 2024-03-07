<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\CmsPage;
use App\Models\ServicePage;

class CMSController extends Controller
{
    public function pageList()
    {
        $pages = CmsPage::orderBy('id', 'DESC')->get();
        return view('admin.content-pages.list', compact('pages'));
    }

    public function pageCreate()
    {
        return view('admin.content-pages.create');
    }

    public function pageStore(Request $request)
    {
        CmsPage::create([
            'title' => $request->title,
            'content' => $request->content,
            'slug' => Str::slug($request->title),
        ]);
        return redirect('admin/page-list')->with('success', 'Page added successfully.');
    }

    public function pageView($slug)
    {
        $page = CmsPage::where('slug', $slug)->first();
        return view('admin.content-pages.view', compact('page'));
    }

    public function pageEdit($slug)
    {
        $page = CmsPage::where('slug', $slug)->first();
        return view('admin.content-pages.edit', compact('page'));
    }

    public function pageUpdate(Request $request)
    {
        CmsPage::where('id', $request->id)->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);
        return redirect('admin/page-list')->with('success', 'Page updated successfully.');
    }

    public function pageDestroy(Request $request)
    {
        CmsPage::where('id', $request->id)->delete();
        $request->session()->flash('success', 'Page deleted successfully.');
    }

    

   
}
