<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadController extends Controller
{
  /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'perfil' => 'required',
            'phone' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'perfil' => $data['perfil'],
            'phone' => $data['phone'],
     
        ]);
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $user = $this->create($request->all());// cadastro no banco e retorna pra $user

        //Agora que já sabemos qual perfil o usuario vai ser, vamos la no banco de dados e buscamos 
        $role = Defender::findPermissionById($request->input('perfil')); //esse método vai retornar um Model \Artesaos\Defender\Role 

        //Esse método só aceita como parametro um objeto do 'tipo' \Artesaos\Defender\Role
        $user->attachRole( $role); // faz o vinculo entre Rule e User



        event(new Registered( $user )); // eu acho mais fácil de analisar assim


        //Conseguiu entender? sim . mas uma pergunta


        
        Mail::to($user->email)->send(new ConfirmationAccount($user));
        
        return back()->with('status', 'Cadastro Efetuado - para ATIVAR siga as instruções em SEU EMAIL.');

        // $this->guard()->login($user);
        // return redirect($this->redirectPath());
    }

    /**
     * Confirm a user's email address.
     *
     * @param  string $token
     * @return mixed
     */
    public function confirmEmail($token)
    {
        User::whereToken($token)->firstOrFail()->confirmEmail();

        return redirect('login')->with('status', 'Cadastro Ativo. Faça o login e bons negócios');
    }
}