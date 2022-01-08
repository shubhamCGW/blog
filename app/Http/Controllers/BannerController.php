<?php

namespace App\Http\Controllers;

use App\Models\blog_banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;

class BannerController extends Controller
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
        $Banners = blog_banner::all();
        return view('banner.index', compact('Banners','Banners'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('banner.create');
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
                    // 'metatitle' => 'required|string',
                    // 'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048|'
                    //     . 'dimensions:max_width=1920,max_height=1080',
                ]
            );
        } catch (ValidationException $e) {
            return Redirect::back()
                ->withErrors($e->validator->getMessageBag()->toArray())
                ->withInput();
        }

        DB::transaction(function () use (&$request) {
            $Banner = new blog_banner();
            $Banner->title = $request->input('title');
            // $Banner->metatitle = null;
            $Banner->image = null;
            $Banner->metatitle = $request->input('metatitle');
            if($request->hasFile('image'))
            {
                $image = $request->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = base_path('/public/images/banner/');
                $image->move($destinationPath, $filename);
                $imagePath = '/images/banner/'.$filename;
                $Banner->image = $imagePath;

            }
            else {
                $Banner->image = null;
            }
            $Banner->save();
            }
        );
         return redirect()->route('banner.index')->with('success','Banner added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Banner = blog_banner::findOrFail($id);
        return view('banner.show', compact('Banner','Banner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Banner = blog_banner::find($id);

        return view('banner.edit', compact('Banner','Banner'));
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
        $Banner = blog_banner::findOrFail($id);

        try {
            $this->validate(
                $request,
                [
                    'title' => 'required|string|max:256',
                    'metatitle' => 'required|string',
                    'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048|'
                        . 'dimensions:max_width=1920,max_height=1080',
                ]
            );
        } catch (ValidationException $e) {
            return Redirect::back()
                ->withErrors($e->validator->getMessageBag()->toArray())
                ->withInput();
        }

        DB::transaction(function () use (&$request, &$Banner) {
            $Banner->title = $request->input('title');
            $Banner->metatitle = $request->input('metatitle');
            if($request->hasFile('image'))
            {
                $image = $request->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = base_path('/public/images/banner/');
                $image->move($destinationPath, $filename);
                $imagePath = '/image/banner/'.$filename;
                $Banner->image = $imagePath;

            }
            else {
                $Banner->image;
            }
            $Banner->save();
            }
        );

        return redirect()->route('banner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Banner = blog_banner::findOrFail($id);

        $Banner->delete();

        return redirect()->route('banner.index');
    }
}
