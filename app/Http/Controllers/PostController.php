<?php
namespace App\Http\Controllers;

use App\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index(){
        $postlist=post::orderBy('post_date','DESC')->get();
        return view('blogpage',compact('postlist'));

    }
}
