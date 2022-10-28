<?php

namespace App\Http\Controllers;

//Ayudante para notificar cambios
use Session;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        // Manda llmar a todos los elementos que se guardaron con la variable
        $posts = Post::all();

        return view('posts.index')->with('posts', $posts);
    }


    public function create()
    {
        return view('posts.create');
    }


    public function store(Request $request)
    {

        $post = new Post;
        // Obligatorios   
        $post->title    = $request->title;
        $post->body     = $request->body;
        $post->date     = $request->date;
        // Opcionales 
        $post->author   = $request->author;
        $post->keywords = $request->keywords;

        $post->save();

        // Mensaje que se muestra cuando todo sale bien
        Session::flash('exito', 'tu informacion se guardo');

        // Regresa a la pagina anterior/
        return redirect()->back();
        // return view('posts.index');

        // Manda el request completo
        // dd($request->all());
    }


    public function show(Post $post)
    {
        return view('posts.show');
    }


    public function edit(Post $post)
    {
        return view('posts.edit');
    }


    public function update(Request $request, Post $post)
    {
        //
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        // Mensaje que se muestra cuando todo sale bien
        Session::flash('Borrado', 'Tu piblicacion se ha borrado correctamente');

        // Regresa a la pagina anterior/
        return redirect()->back();

    }
}
