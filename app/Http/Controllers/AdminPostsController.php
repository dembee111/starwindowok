<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostsCreateRequest;
use App\Photo;
use App\Post;
use App\logsystem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminPostsController extends Controller
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
        $posts = Post::all();
        return view('back.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostsCreateRequest $request)
    {
        $input = $request->all();

        $user = Auth::user();
         
        if($file = $request->file('photo_id')){

            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $photo =  Photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;
        }

        $user->posts()->create($input);

        Session::flash('created_post', 'Мэдээлэл амжилттай нэмэгдлээ');

        logsystem::create([
                'user_id' => Auth::user()->id,
                'log' => "Мэдээлэл нэмсэн байна"
            ]);

        return redirect('/admin/posts');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('back.posts.edit', compact('post'));
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
            
        $input = $request->all();
        
        
        if ($file = $request->file('photo_id')) {

            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $photo =  Photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;


        }
        
  
        Auth::user()->posts()->whereId($id)->first()->update($input);



        Session::flash('updated_post', 'Мэдээлэл амжилттай засагдлаа');

        logsystem::create([
                'user_id' => Auth::user()->id,
                'log' => "Мэдээлэл засварласан байна"
            ]);

        return redirect('/admin/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        unlink(public_path() . $post->photo->file);

        $post->delete();

        Session::flash('deleted_post', 'Мэдээлэл амжилттай устгагдлаа');

        logsystem::create([
                'user_id' => Auth::user()->id,
                'log' => "Мэдээлэл усгасан байна"
            ]);

        return redirect('/admin/posts');
    }
}
