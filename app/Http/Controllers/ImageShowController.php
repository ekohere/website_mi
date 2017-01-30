<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Gallery;
 
class ImageShowController extends Controller
{
    public function index()
    {
        $images = Gallery::all();
        return view('frontend.gallery')->with('images', $images);
    }
 
    
}