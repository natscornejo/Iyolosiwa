<?php

namespace App\Http\Controllers;

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
        $posts = Post::paginate(7);

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
        Session::flash('Exito', 'Tu información se guardo correctamente');

        return redirect()->route('noticias.index');
        // Regresa a la pagina anterior/
        // return redirect()->back();
        // return view('posts.index');

        // Manda el request completo
        // dd($request->all());
    }


    public function show($id)
    {
        return view('posts.show');
    }


    public function edit($id)
    {
        $post = Post::find($id);

        return view('posts.edit')->with('post', $post);
    }


    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        // Obligatorios   
        $post->title    = $request->title;
        $post->body     = $request->body;
        $post->date     = $request->date;
        // Opcionales 
        $post->author   = $request->author;
        $post->keywords = $request->keywords;

        $post->save();

        // Mensaje que se muestra cuando todo sale bien
        Session::flash('Actulizado', 'tu información se actulizó correctamente');

        // Regresa a la pagina anterior/
        return redirect()->route('noticias.index');
        // return view('posts.index');

        // Manda el request completo
        // dd($request->all());
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        // Mensaje que se muestra cuando todo sale bien
        Session::flash('Borrado', 'Tu publicación se ha borrado correctamente');

        // Regresa a la pagina anterior/
        return redirect()->back();

    }

    // public function NombreDeLaFuncion
    public function mapa()
    {
        $pmapa = 'mapa-del-sitio';

        // return view('nombre de la plantilla')
        return view('utilities.dashboard.admin-treeview')
        ->with('pmapa', $pmapa);
    }
}
