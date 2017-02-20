<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Mail\ConfirmationAccount;
use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\pedido;
use Illuminate\Support\Facades\Auth;


class PedidoController extends Controller
{
      public function create(array $data)
    {
      return pedido::create([
          'produtoservice' => $data['produtoservice'],
          'titulo' => $data['titulo'],
          'detalhes' => $data['detalhes'],
          'categoria' => $data['categoria'],
          'valormedio' => $data['valormedio'],
         // 'horaatendimento' => $data['horaatendimento'],
        ]);
    }

    public function register(Request $request)
    {
        $dataForm = $request->all();
        $dataForm['user_id'] = Auth::user()->id;
        $order = pedido::create($dataForm);
        return view('home');
    }


}
