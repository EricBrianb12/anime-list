<?php

namespace App\Http\Controllers;

use Faker\Provider\Image;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Input;
use File;
use PhpParser\Node\Expr\Empty_;
use Symfony\Component\Console\Helper\Table;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Post $post)
    {
        if (isset($_GET['search']) && $_GET['search'] !==''){
            $search = filter_var($_GET['search'], FILTER_SANITIZE_STRING);
            $posts = $post->where('nome','like',"%$search%")->paginate();
        }else{

            $posts = $post->paginate(5);
        }

        Return view('posts.index', compact('posts'));




    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Post $post)
    {
        if (Input::File('imagem'))
        {

            $file = Input::File('imagem');
            $name = uniqid().'_'.$file->getClientOriginalName();
            $file->move('imagem-post',$name);
        }


        if(empty($name))
        {
            $name = '/default.jpg';
        }




        if (empty($name))
        {
           $name = '/default.jpg';
        }


        $data = $request->all();
        $data['assistir'] = $data['parou']+1;
        $data['imagem'] = $name;
        $post->create($data);





      





        return response()->redirectToRoute('posts.index');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post =  Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post =  Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $data = $request->all();
        $data['assistir'] = $data['parou']+1;
        unset($data['_token']);
        unset($data['_method']);

        \App\Post::where('id', '=', $id)->update($data);

        return response()->redirectToRoute('posts.index');
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
        $post->delete();
        return response()->redirectToRoute('posts.index');
    }
}
