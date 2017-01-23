<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Post;
use App\Type;
use Illuminate\Http\Request;
use Session;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $berita = Post::where('title', 'LIKE', '%'.(isset($request->search)?$request->search:'').'%')
            ->orwhere('content', 'LIKE', '%'.(isset($request->search)?$request->search:'').'%')
            ->paginate(isset($request->pagination)?$request->pagination:($request->pagination));


        return view('admin.berita.index', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        $category = Category::pluck('name','id');
        $type = Type::where('name','berita')->pluck('name','id');

        return view('admin.berita.create',compact('category','type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Post::create($requestData);

        Session::flash('flash_message', 'Post added!');

        return redirect('admin/berita');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $berita = Post::findOrFail($id);

        return view('admin.berita.show', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $berita = Post::findOrFail($id);
        $category = Category::pluck('name','id');
        $type = Type::pluck('name','id');

        return view('admin.berita.edit', compact('berita','category','type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();
        
        $berita = Post::findOrFail($id);
        $berita->update($requestData);

        Session::flash('flash_message', 'Post updated!');

        return redirect('admin/berita');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Post::destroy($id);

        Session::flash('flash_message', 'Post deleted!');

        return redirect('admin/berita');
    }
}
