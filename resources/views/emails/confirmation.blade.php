<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <style>
    body{margin:0px; padding: 0px; background-color:#ddd;}
    html{margin:0px; padding: 0px;}
    .base{width:600px; background-color: #fff; margin: auto; margin-top: 0px; min-height: 100%; height: 1000px;}
    p {margin:0px; padding: 13px; font-size: 22px; text-align: justify;} 
    .logo{width: auto; padding-left: 15px; padding-top:10px; padding-bottom: 10px; }
    .barra{background: #9AD5E3; height: 188px; width:600px;}
    hr{margin: auto; width:90%;}
    h1{text-align: center;}
    h2{color:red; font-size:28px; text-align:center;}
    a{width: 250px;  padding: 15px; color: #fff; background: #750BBB; text-align: center; text-decoration: none; font-size: 22px; margin: auto;}
    .btn{margin: auto; width: 250px;}
    .ii a[href] {color:#fff;}
    .ii a{color:#fff;}
    .ii a:active {color:#fff;}
    </style>
    <title></title>
</head>
<body>
<div class="base">
<div class="logo">
    <img src="http://www.ordenext.com/mail/logo.png" alt="[Ordenext]">
</div>
<div class="barra">
    <img src="http://www.ordenext.com/mail/barra.jpg" alt="[Ordenext - habilitar visualização da imagem]">
</div>
<br>
<h1>Confirmação de E-mail</h1>
<br>
<hr>
<br>
<p>O <b>Ordenext</b> é uma plataforma web que tem como objetivo auxiliar
você, sua empresa ou indústria a fazer bons negócios.</p>

<p>Pela plataforma você pode solicitar orçamento de produtos 
e serviços/profissionais, caso você seja um profissional ou empresário, tem acesso a 
centenas de potencias clientes.</p>
<br><br><br>
<hr>

<p><b>Agora precisamos que você confirme seu cadastro, estaremos a sua 
disposição para te ajudar a fazer bons negócios.</b></p>
<br><br><br><br>
    <div class="btn"><a href='{{ url("register/confirm/{$user->token}") }}'> Confirme Agora</a></div>
    <br>
    <h2>Lançamento oficial 20 de Fevereiro de 2017, vamos te manter informados</h2>
</div>
</body>
</html>