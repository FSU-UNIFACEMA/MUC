<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Importe o facade do Auth
use Illuminate\Support\Facades\Validator; // Importe o facade do Validator
class AuthController extends Controller
{

    public function create()
    {
        return view('User.create');
    }
    public function index()
    {
        $user = User::all();
        return view('User.index', compact('user'));
    }

    public function buscarPorNome(Request $request)
    {
        $nome = $request->input('nome');

        if ($nome) {
            $user = User::where('name', 'like', '%' . $nome . '%')->get();
        } else {
            $user = User::all();
        }
    }
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        Auth::login($user);

        return view('User.create');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return view('errorview.fail');
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            return redirect()->route('principal');
        } else {
            return redirect()->route('login')->with('error', 'Usuário ou senha inválidos.');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return view('login');
    }

    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user_index')->with('success', 'Usuário apagada com sucesso.');
    }
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect()->route('user_index')->with('success', 'Usuário atualizada com sucesso.');
    }
}
