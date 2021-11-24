<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Project;
use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function projectIndex()
    {
        $categories = Category::all();
        $projects = Project::with('category')->get();
        $posts = Post::with('category')->get();
        

        return view('pages.project', compact('categories', 'projects', 'posts'));
    }
}
