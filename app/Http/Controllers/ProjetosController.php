<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Projetos;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

class ProjetosController extends Controller
{
  public function __construct(){
   $this->middleware('auth');
 }
public function index()
{

      if(Auth::user()->type == 1){

    $p = Projetos::all();
    return view ('projetos.index')->with('projetos', $p);
      } else $p = Projetos::all();
      return view ('painelvotar')->with('projetos',$p);
}

public function ativos()
{
        $ativos = Projetos::where('statusProjeto','=',0)->get();
        return view ('projetos.ativos')->with('ativos', $ativos);

}

public function encerrados()
{
        $encerrados = Projetos::where('statusProjeto','=',1)->get();
        return view ('projetos.encerrados')->with('encerrados', $encerrados);

}
/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public function create()
{
  //if(Auth::user()->type==1)
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
     public function show($id)
    {
        $projetos = Projetos::find($id);
        return view('projetos.show')->with('projetos',$projetos);
    }
    public function edit($id)
    {
        $projetos = Projetos::find($id);
        return view('projetos.edit')->with('projetos',$projetos);
    }
public function update(Request $request, $id)
{


  $projetos = Projetos::find($id);
  $projetos->titulo = $request->titulo;
  $projetos->subTitulo = $request->subTitulo;
  $projetos->descriçao= $request->descriçao;
  $projetos->statusProjeto=$request->statusProjeto;
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
public function destroy($idProjeto)
{
    $projetos = Projetos::find($idProjeto);
    $projetos ->delete();
    return redirect('/projetos');
}
}
