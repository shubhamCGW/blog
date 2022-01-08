<?php

namespace App\Http\Controllers;

use App\Models\blog_banner;
use App\Models\blog_post;
use App\Models\blog_category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    // public function __construct()
    // {
    //   $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Banners = blog_banner::orderBy('created_at','desc')->first();
        $Posts = blog_post::select( "blog_posts.*",
            "blog_categories.name as category_name"
        )
        ->join("blog_categories", "blog_categories.id", "=", "blog_posts.categories_id")
        ->orderBy('created_at','desc')
        ->get();
        $Posts->shift(1);
        $featuredPost = blog_post::select( "blog_posts.*",
            "blog_categories.name as category_name")
        ->join("blog_categories", "blog_categories.id", "=", "blog_posts.categories_id")
        ->orderBy('created_at','desc')->first();
        //dd($featuredPost);
        return view('blog.index', compact('Banners','Posts','featuredPost'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     $Banners = blog_banner::orderBy('created_at','desc')->first();
    //     $Categories = blog_category::withCount('posts')->get();
    //     $post = blog_post::findOrFail($id);
    //     $category_name = blog_post:: select( "blog_posts.*",
    //         "blog_categories.name as category_name"
    //     )
    //     ->join("blog_categories", "blog_categories.id", "=", "blog_posts.categories_id")
    //     ->where('blog_posts.id' , $id)
    //     ->get(['blog_categories.name']);
    //     // ->select('SELECT * FROM blog_posts INNER JOIN blog_categories ON blog_posts.categories_id = blog_categories.id WHERE blog_posts.id = $post')
    //     return view('blog.show', compact('post','Categories','category_name','Banners'));
    // }
    
    public function single_post($id, $slug = null)
    {
        $post = blog_post::find($id);
    
        $Banners = blog_banner::orderBy('created_at','desc')->first();
        $Categories = blog_category::withCount('posts')->get();
        $category_name = blog_post:: select( "blog_posts.*",
                "blog_categories.name as category_name"
            )
            ->join("blog_categories", "blog_categories.id", "=", "blog_posts.categories_id")
            ->where('blog_posts.id' , $id)
            ->get(['blog_categories.name']);
        if ($slug != $post->slug)
        {
            return redirect()
                ->route('single_post', ['id' => $post->id, 'slug' => $post->slug]);
        }
    
        return view('blog.show',compact('post','Categories','category_name','Banners'));
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function delete()
    {
        $Posts = blog_post::onlyTrashed()->get();
        return view('blog.delete',compact('Posts'));
    }
}
