<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Projetos;

class ProjetosController extends Controller
{
  public function __construct(){
   $this->middleware('auth');
 }
public function index()
{
    $p = Projetos::all();
    return view ('projetos.index')->with('projetos', $p);
}
/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public function create()
{
  return view ('projetos.create');
}
/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request)
{
  //  dd($request->all());
    Projetos::create($request->all());
    return redirect ('/projetos');
}
/**
 * Display the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function show(Projetos $projetos)
{
    return view('/projetos.show')->with('projetos',$projetos);
}
/**
 * Show the form for editing the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function edit(Projetos $projetos)
{
      return view('/projetos.edit')->with('projetos',$projetos);
}

/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function update(Request $request, Projetos $projetos)
{
  $projetos->titulo = $request->titulo;
  $projetos->subtitulo = $request->subtitulo;
  $projetos->descricao= $request->descricao;
  $projetos->status=$request->status;
  $projetos->metaVotos=$request->metaVotos;
  $projetos->save();
  return redirect('/projetos');
}

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function destroy(Projetos $projetos)
{
    $projetos ->delete();
    return redirect('/projetos');
}
}
