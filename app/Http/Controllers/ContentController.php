<?php

namespace App\Http\Controllers;

use App\Content;
use App\html_block;
use App\logsystem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ContentController extends Controller
{
    public function index(){

    	$social = Content::where('path', 'social')->get();

    	return view('back.social.index', compact('social'));
    }


    public function update(Request $request, $id)
    {
    	$url = $request->input('url');

    	$messages = [
            'required' => 'Энэ Сошиал хаягаа заавал оруулах ёстой.',
            'string' => 'Энэ :attribute талбарт текст оруулах ёстой.',
            'max' => 'Энэ :attribute 255 тэмдэгтээс ихгүй байх ёстой.',
            'min' => 'Энэ :attribute 10 тэмдэгтээс багагүй байх ёстой.'
            
        ];

        $validator = Validator::make($request->all(), [
            'url' => ['required', 'string', 'max:255', 'min:10']            
            
        ], $messages);

        if ($validator->fails()) {
            return redirect('admin/socials')
                        ->withErrors($validator)
                        ->withInput();
        }    	
       
        $content = Content::findOrFail($id);
        $content->update([
            'name' => $request->input('name'),
            'url' => $request->input('url'),
            'path' => 'social'
            

        ]);

        Session::flash('updated_social', 'Засвар амжилттай засагдлаа');

        logsystem::create([
                'user_id' => Auth::user()->id,
                'log' => "Сошиал засварласан байна"
            ]);

        return redirect('/admin/socials');
    }

    public function indexContent()
    {
        $contents = html_block::all();

        return view('back.content.index', compact('contents'));
    }

    public function updateContent(Request $request, $id)
    {
        

        $messages = [
            'required' => 'Энэ Сошиал хаягаа заавал оруулах ёстой.',
            'string' => 'Энэ :attribute талбарт текст оруулах ёстой.',
            'max' => 'Энэ :attribute 255 тэмдэгтээс ихгүй байх ёстой.',
            'min' => 'Энэ :attribute 10 тэмдэгтээс багагүй байх ёстой.'
            
        ];

        $validator = Validator::make($request->all(), [
            'content' => ['required', 'string', 'max:1000', 'min:10']            
            
        ], $messages);

        if ($validator->fails()) {
            return redirect('admin/socials')
                        ->withErrors($validator)
                        ->withInput();
        }       
       
        $content = html_block::findOrFail($id);
        $content->update([
            'title' => $content->title,
            'slug' => $content->slug,
            'content' => $request->input('content')
            

        ]);

        Session::flash('updated_content', 'Контент Засвар амжилттай засагдлаа');

        logsystem::create([
                'user_id' => Auth::user()->id,
                'log' => "Контент засварласан байна"
            ]);

        return redirect('/admin/contents');
    }

    
}
