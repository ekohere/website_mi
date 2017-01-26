<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Gallery;
 
class ImageController extends Controller
{
 
    public function index()
    {
        $images = Gallery::all();
        return view('images.index')->with('images', $images);
    }
 
    public function create()
    {
        return view('images.create');
    }
 
    public function store(Request $request)
    {
        
 
        $data = $request->all();
 
        $photo = $request->file('photo')->getClientOriginalName();
        $destination = base_path() . '/public/uploads';
        $request->file('photo')->move($destination, $photo);
 
        $data['photo'] = $photo;
 
        Gallery::create($data);
 
        return redirect()->route('images.index')->with('message', 'Image Saved');
    }
}