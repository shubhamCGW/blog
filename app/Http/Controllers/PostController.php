<?php

namespace App\Http\Controllers;

use App\Models\blog_post;
use Illuminate\Http\Request;
use App\Models\blog_category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;

class PostController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = blog_post::paginate(5);
        return view('post.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Categories = blog_category::all();
        // $selectedCategory = blog_post::first()->categories_id;
        return view('post.create',compact('Categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $this->validate(
                $request,
                [
                    'title' => 'required|string|max:256',
                    'altText' => 'required|string|max:256',
                    'meta_description' => 'required|string',
                    'slug' => 'required|string|max:256',
                    'metatitle' => 'required|string',
                    'content'=>'required|string',
                    'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
                ]
            );
        } catch (ValidationException $e) {
            return Redirect::back()
                ->withErrors($e->validator->getMessageBag()->toArray())
                ->withInput();
        }

        DB::transaction(function () use (&$request) {
            $post = new blog_post();
            $post->title = $request->input('title');
            $post->metatitle = $request->input('metatitle');
            $post->content = str_replace(PHP_EOL, '', $request->input('content'));
            $post->meta_description = $request->input('meta_description');
            $post->altText = $request->input('altText');
            $post->slug = $request->input('slug');
            if($request->hasFile('image'))
            {
                $image = $request->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = base_path('/public/images/post/');
                $image->move($destinationPath, $filename);
                $imagePath = '/images/post/'.$filename;
                $post->image = $imagePath;

            }
            else {
                $post->image = null;
            }
            $post->categories_id = $request->input('categories_id');
            $post->save();
            }
        );

        return redirect()->route('post.index')->with('success','post added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = blog_post::findOrFail($id);
        return view('post.show', compact('post','post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $suggestions_datas = DB::table('suggestions')->where('id', $id)->get();
        $categories = blog_category::pluck("name","id");
        $post = blog_post::find($id);

        return view('post.edit', compact('categories','post'));
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
        $post = blog_post::findOrFail($id);

        try {
            $this->validate(
                $request,
                [
                    'title' => 'required|string|max:256',
                    'altText' => 'required|string|max:256',
                    'meta_description' => 'required|string',
                    'slug' => 'required|string|max:256',
                    'metatitle' => 'required|string',
                    'content'=>'required|string',
                    'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
                ]
            );
        } catch (ValidationException $e) {
            return Redirect::back()
                ->withErrors($e->validator->getMessageBag()->toArray())
                ->withInput();
        }

        DB::transaction(function () use (&$request,&$post) {
            $post->title = $request->input('title');
            $post->metatitle = $request->input('metatitle');
            $post->content = str_replace(PHP_EOL, '', $request->input('content'));
            $post->meta_description = $request->input('meta_description');
            $post->altText = $request->input('altText');
            $post->slug = $request->input('slug');
            if($request->hasFile('image'))
            {
                $image = $request->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = base_path('/public/images/post/');
                $image->move($destinationPath, $filename);
                $imagePath = '/images/post/'.$filename;
                $post->image = $imagePath;

            }
            else {
                $post->image;
            }
            $post->categories_id = $request->input('categories_id');
            $post->save();
            }
        );

        return redirect()->route('post.index')->with('success','Post updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = blog_post::findOrFail($id);

        $post->delete();

        return redirect()->route('post.index')->with('success','Post deleted Successfully!');
    }

    public function restoreDeletedPost($id)
    {

        $Posts = blog_post::where('id', $id)->withTrashed()->first();

        $Posts->restore();

        return redirect()->route('post.index')
            ->with('success', 'You successfully restored the post');
    }

    public function deletePermanently($id)
    {
        $Posts = blog_post::where('id', $id)->withTrashed()->first();

        $Posts->forceDelete();

        return redirect()->route('post.index')
            ->with('success', 'You successfully deleted the post fromt the Recycle Bin');

    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function delete()
    // {
    //     $Posts = blog_post::onlyTrashed()->get();
    //     return view('blog.delete',compact('Posts'));
    // }
}
