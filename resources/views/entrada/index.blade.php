@extends('layouts.app')

@section('content')
{!! Form::open(['route' => 'entrada.store']) !!}

<div>
    {{Form::label('descricao', 'Digite a Descrição:')}}
    {{Form::text('descricao', '')}}
</div>

<div>
    {{Form::label('valor_entrada', 'Digite Valor da Entrada:')}}
    {{Form::text('valor_entrada', '')}}
</div>
<div>
    {{Form::submit('Enviar')}}
</div>
{!! Form::close() !!}
@endsection
