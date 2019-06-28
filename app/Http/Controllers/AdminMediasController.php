<?php

namespace App\Http\Controllers;

use App\Photo;
use App\logsystem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminMediasController extends Controller
{
    public function index()
    {
    	$photos = Photo::all();
    	return view('back.media.index', compact('photos'));
    }

    public function create()
    {
    	return view('back.media.create');
    }

    public function store(Request $request)
    {
         $file = $request->file('file');

         $name = time() . $file->getClientOriginalName();

         $file->move('images', $name);

         Photo::create(['file' => $name]);
         

           logsystem::create([
                'user_id' => Auth::user()->id,
                'log' => "зураг нэмсэн байна"
            ]);
    }

    public function edit($id)
    {
        $photo = Photo::findOrFail($id);

        return view('back.media.edit', compact('photo'));
    }

    public function update(Request $request, $id)
    {
        if (!empty($request->file('file'))) {

            $photo = Photo::findOrFail($id);

            if (file_exists(public_path() . $photo->file)) {

                    unlink(public_path() . $photo->file);
                }

             $file = $request->file('file');

             $name = time() . $file->getClientOriginalName();

             $file->move('images', $name);

             $photo->update(['file' => $name]);

             Session::flash('updated_photo', 'Зураг амжилттай солигдлоо');
             
             logsystem::create([
                'user_id' => Auth::user()->id,
                'log' => "зураг солисон байна"
            ]);

             return redirect('/admin/medias');
        }    
         

         
    }

    public function destroy($id)
    {
        $photo = Photo::findOrFail($id);

        if (file_exists(public_path() . $photo->file)) {

            unlink(public_path() . $photo->file);
        }        

        $photo->delete();

        Session::flash('deleted_photo', 'Зураг амжилттай усгагдлаа');

        logsystem::create([
                'user_id' => Auth::user()->id,
                'log' => "зураг усгасан байна"
            ]);

        return redirect('/admin/medias');




    }

   
}
