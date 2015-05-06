@extends('master')

@section('description', 'Pagina de contato')

@section('keywords', 'contato, projetos')

@section('title', 'Fale Conosco')

@section('content')

<h1>Página de Contato</h1>
<!--
|--------------------------------------------------------------------------
|27/04/2015
|--------------------------------------------------------------------------
|
| Formulário de contato
|  
|   {!! Form::label('nome_contato', 'Nome', array('class' => 'campo-formulario')) !!}
|   {!! Form::text('campo-nome', null, array('class' => 'input','placeholder' => 'Digite seu nome')) !!}
|  
|
-->


{!! Form::open(array('action' => 'PagesController@sendContact')) !!}

<fieldset class="data-a">
<legend class="centered"></legend>

{!! Form::label('nome_contato', 'Nome', ['class' => 'campo-formulario']) !!}
{!! Form::text('campo-nome', null, ['class' => 'input','placeholder' => 'Digite seu nome']) !!}


{!! Form::label('email_contato', 'Email', ['class' => 'campo-formulario']) !!}
{!! Form::email('campo-email', null, ['class' => 'input','placeholder' => 'Digite seu e-mail']) !!}


{!! Form::label('telefone_contato', 'Telefone', ['class' => 'campo-formulario']) !!}
{!! Form::text('campo-telefone', null, ['class' => 'input','placeholder' => 'Digite seu telefone']) !!}


{!! Form::label('celular_contato', 'Celular', ['class' => 'campo-formulario']) !!}
{!! Form::text('campo-celular', null, ['class' => 'input','placeholder' => 'Digite seu celular']) !!}


{!! Form::label('mensagem_contato', 'Mensagem', ['class' => 'campo-formulario']) !!}
{!! Form::textarea('campo-mensagem', null, ['class' => 'input','placeholder' => 'Digite sua mensagem']) !!}

{!! Form::button('Enviar', ['type' => 'submit', 'class' => 'btn button--secondary']) !!}

</fieldset>

{!! Form::close() !!}








<!-- Fim formulário : laravel -->

@stop