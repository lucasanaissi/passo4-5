<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class usersCController extends Controller{
    public
    function index()
    {
        $user = UserModel::orderBy('name','id')->paginate(10);

        return view('usersCController.index',['user'=>$user]);
    }

    public
    function create()
    {
        return view('user.create');
    }

    public
    function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;

        return redirect()->route(usersCController.index)->with('alert-sucess', 'Usuário cadastrado com sucesso!');
    }

    public
    function show($id)
    {
        //
    }

    public
    function edit($id)
    {
        $user = UserModel::findOrFail($id);
        return view('user.edit', compact('user'));
    }

    public
    function update(Request $request, $id)
    {
        $user = UserModel::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;

        return redirect()->route(usersCController.index)->with('alert-sucess', 'Usuário atualizado com sucesso!');
    }

    public
    function destroy($id)
    {
        $user = UserModel::findOrFail($id);
        $user = delete();
        return redirect()->route('user.index')->with('alert-sucess','Usuário deletado com sucesso!');
    }
}
