<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blogs::all();
        return view('blogs.blog', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.createblogs');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        $input = $request->all();
        // $request->validate([
        //     'title' => 'required|string|max:255',
        //     'description' => 'required|string',
        //     'image' => 'required|string', // Adjust validation as needed
        // ]);
        function fileUpload($request, $name, $foldername)
        {
            $image = '';
            if ($image = $request->file($name)) {

                $image = $request->$name;
                $imageName = time() . $image->getClientOriginalName();
                $path = "storage/images/" . $foldername . "/";
                $image->move(public_path($path), $imageName);


                return $path . $imageName;
            }
        }
        if ($request->image != "") {
            $imageName = fileUpload($request, "image", "blog");
            $input["image"] = $imageName;
        }

        Blogs::create($input);

        return redirect()->route('blogs')->with('success', 'Blog created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blogs::findOrFail($id);
        return view('blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blogs $id)
    {
        return view('blogs.editblog', compact('id'));
    }
    // public function edit(Blogs $id)

    // {
    //     $blog = $id;
    //     return view("blogs.editblogs", compact('blog'));
    // }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = Blogs::findOrFail($id);

        $input = $request->all();

        // Handle file upload
        if ($request->hasFile('image')) {
            $imageName = $this->fileUpload($request, 'image', 'blog');
            $input['image'] = $imageName;
        }

        $blog->update($input);

        return redirect()->route('blogs')->with('success', 'Blog updated successfully!');
    }

    // File upload helper function
    private function fileUpload($request, $name, $foldername)
    {
        if ($request->file($name)) {
            $image = $request->file($name);
            $imageName = time() . $image->getClientOriginalName();
            $path = "storage/images/" . $foldername . "/";
            $image->move(public_path($path), $imageName);
            return $path . $imageName;
        }
        return null;
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blogs::find($id);
        // dd($blog);
        $blog->delete();

        return redirect()->route('blogs')->with('success', 'Blog deleted successfully!');
    }
}
