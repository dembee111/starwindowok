<?php

namespace App\Http\Controllers;

use App\Content;
use App\Post;
use App\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        

        $posts = $this->getPosts();
        $managers = $this->getManagers();
        $content = $this->getContent();
        $social = $this->getSocial();
        // dd($content);
    	$pageTitle = 'Монголын номер нэг Вакум цонхны үйлдвэр';
    	$page = 'index';
    	return view('front.index', compact('page', 'pageTitle', 'posts', 'content', 'managers', 'social'));
    }

    public function about()
    {
    	$pageTitle = 'бидний тухай';
    	$page = 'about';
    	return view('front.about', compact('page', 'pageTitle'));
    }

     public function calculator()
    {
        $managers = $this->getManagers();
        
        $social = $this->getSocial();
    	$pageTitle = 'Тооцоолуур';
    	$page = 'calculator';
    	return view('front.calculator', compact('page', 'pageTitle', 'managers', 'social'));
    }

     public function service()
    {
    	$pageTitle = 'Бүтээгдэхүүн';
    	$page = 'service';
    	return view('front.service', compact('page', 'pageTitle'));
    }

     public function contact()
    {
    	$pageTitle = 'холбоо барих';
    	$page = 'contact';
    	return view('front.contact', compact('page', 'pageTitle'));
    }

     public function branch()
    {
    	$pageTitle = 'салбар';
    	$page = 'branch';
    	return view('front.branch', compact('page', 'pageTitle'));
    }

     public function posts()
    {
        $posts = $this->getPostAll();

    	$pageTitle = 'Мэдээлэл';
    	$page = 'posts';
    	return view('front.posts', compact('page', 'pageTitle', 'posts'));
    }

    public function post($id)
    {
        $post = Post::findOrFail($id);

        $this->addCount($post->id);

        $pageTitle = 'Мэдээлэл';
        $page = 'post';
        $posts = Post::all();

        return view('front.post', compact('page', 'pageTitle','post', 'posts'));
    }

    public function getPosts()
    {
        $posts = Post::take(3)->get();

        return $posts;
    }

    public function getPostAll()
    {
        $posts = Post::orderBy('created_at', 'asc')->paginate(6);

        return $posts;
    }

    public function getContent()
    {
        $index = Content::where('name', 'advantage')->first();

        return $index;
    }

    public function addCount($id)
    {
       $post = Post::findOrFail($id);

       $post->increment('count', 1);

       
    }

    public function getManagers()
    {
        $users = User::where('role_id', 2)->get();

        return $users;
    }

     public function getSocial(){

        $social = Content::where('path', 'social')->get();

        return $social;
    }
}
