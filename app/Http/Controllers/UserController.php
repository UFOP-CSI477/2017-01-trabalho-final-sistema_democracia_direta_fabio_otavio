<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\User;
//use App\Projetos;

class UserController extends Controller
{
     public function __construct() {
        $this->middleware('auth');
    }
  //  public function
  //  if(Auth::user()->type==1){

  //  }

  public function show($id)
    {
        $users = User::find($id);
        return view('users.show')->with('users',$users);
    }
    public function edit($id)
    {
        $users = User::find($id);
        return view('users.edit')->with('users',$users);
    }

    public function index(){
        if (Auth::user()->type == 2){

    return redirect('/projetos');}
        else {
          $users = User::all();
          return view('users.index')->with('users', $users);
        }
    }

    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      User::create($request->all());
      return redirect('/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, $id)
    {
      //if(Auth::user()->type == 2 || Auth::user()->type == 3) {
          $user = User::find($id);
          $user->name = $request->get("name");
          $user->email = $request->get("email");
          $user->login = $request->get("login");
          $user->password = $request->get("password");
          $user->nomeMae = $request->get("nomeMae");
          $user->cpf = $request->get("cpf");
          $user->titEleitor = $request->get("titEleitor");
          $user->tipo = '1';
          $user->dataNascimento = $request->get("dataNascimento");

          /*if ($request->file('imagem')!=null && $request->file('imagem')->isValid()) {
              $fnome = $request->file('imagem')->getClientOriginalName();
              $request->file('imagem')->move("imagens/", $fnome);
              $produto->nome = $fnome;
              die("xxxxx");
          }*/
          $user->save();
          //session()->flash('info', 'Produto atualizado!');
          return redirect('/dashboard');
      //} else {
      //    return redirect('/');
      //}
    }

        public function password(){
        return View('user.password');
    }

    public function updatepassword(Request $request){

         $user = new User;
                $user->where('cpf', '=', Auth::user()->cpf)
                     ->update(['password' => bcrypt($request->password)]);
                return redirect('/dashboard');
    }

     public function email(){
        return View('user.email');
    }

    public function updateemail(Request $request){

         $user = new User;
                $user->where('cpf', '=', Auth::user()->cpf)
                     ->update(['email' => $request->email]);
                return redirect('/dashboard');
    }

         public function profile(){
        return View('user.profile');
    }
    public function updateprofile(Request $request){
         $user = new User;
                $user->where('cpf', '=', Auth::user()->cpf)
                     ->update(['name' => $request->name]);
                return redirect('/dashboard');
    }

   public function destroy($id)
{
    $user = User::find($id);
    $user ->delete();
    return redirect('/users');
}


}
