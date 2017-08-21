<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Votos;
use App\Projetos;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

class VotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
         $this->middleware('auth');
     }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function votar($id){

        $usuario = Auth::user()->id;
        $votoss = Votos::where('projeto_idProjeto','=',$id)->where('users_id','=',$usuario)->first();
        if($votoss == null) {
           Votos::create([
          'users_id' => $usuario,
          'projeto_idProjeto' => $id
      ]);
          $projeto = Projetos::find($id);
          $projeto->numvotos += 1;

          if($projeto->numvotos == $projeto->metaVotos){
              $projeto->statusProjeto = 1;
          }
          $projeto->save();
        }
    return redirect ('/projetos');
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
