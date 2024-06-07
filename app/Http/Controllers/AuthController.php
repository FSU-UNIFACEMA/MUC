<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// Importe o facade do Auth
use Illuminate\Support\Facades\Validator;

// Importe o facade do Validator
class AuthController extends Controller
{

    public function create()
    {
        return view('user.create');
    }

    public function index()
    {
        $user = User::all();
        return view('user.index', compact('user'));
    }

    public function buscarPorNome(Request $request)
    {
        $nome = $request->input('nome');

        if ($nome) {
            $user = User::where('name', 'like', '%' . $nome . '%')->get();
            return view('user.index', compact('user'));
        } else {
            $user = User::all();
            return view('user.index', compact('user'));
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

            $errors = $validator->errors();

            if ($errors->has('cpf')){
                return redirect()->route('pessoas_create')->with('mensagem', 'cpf inválido');
            }
            else{
                return response()->json(['error' => $validator->errors()], 400);
            }

        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        try {
            Auth::login($user);
            return redirect()->route('user_create')->with('mensagem', 'usuário criado com sucesso');
        }catch (\Exception $e) {
            return redirect('user_create')->with('mensagem', 'Não foi possível criar o usuário. Por favor, tente novamente.');
        }
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
            return redirect()->route('login')->with('mensagem', 'Usuário ou senha inválidos.');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return view('login');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user_index')->with('mensagem', 'Usuário apagado com sucesso.');
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect()->route('user_index')->with('mensagem', 'Usuário atualizado com sucesso.');
    }
}
