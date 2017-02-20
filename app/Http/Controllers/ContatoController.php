<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Input;
class ContatoController extends Controller
{
      public function send(Request $request)
{
	$nome = $request->input('nome');
       		$data = array(
			'nome'=> $request->input('nome'),
			'email'=> $request->input('email'),
			'telefone'=> $request->input('telefone'),
			'assunto'=> $request->input('assunto'),
			'mensagem'=> $request->input('mensagem'),
			);
		
        Mail::send('emails.orcamento', $data, function ($message)
        {

             $message->from('contato@ordenext.com', 'Amatriz Ordenext');

            $message->to('empresas@anb.net.br');
			
			$message->subject($nome);

        });
     $txt = '<div class="text-info">Mensagem enviado com sucesso</div>';


	return View('contato.sucesso')->with('txt', $txt);
    }
	
	public function send2(Request $request)
    {
		
       		$data = array(
			'nome'=> $request->input('nome'),
			'email'=> $request->input('email'),
			'telefone'=> $request->input('telefone'),
			'assunto'=> $request->input('assunto'),
			'mensagem'=> $request->input('mensagem'),
			);
		
        Mail::send('emails.orcamento', $data, function ($message)
        {

            $message->from('contato@ordenext.com', 'Amatriz Ordenext');

            $message->to('contato@ordenext.com');
			
			$message->subject('Contato via Ordenext');

        });
     $txt = '<div class="text-info">Mensagem enviado com sucesso</div>';

	return View('contato.sucesso')->with('txt', $txt);
    }
}
