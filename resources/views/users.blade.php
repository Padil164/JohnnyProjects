@extends('Layouts.default');

@section('content')

<form method = "POST" 
enctype="multipart/form-data">
    @csrf

    <label>Nome do produto: </label>
    <input
        type = "text"
        name = "name"
        value = "{{old('name')}}" placeholder="Digite o nome do produto"
    >
    @error('name')
    {{$message}}
    @enderror
    <br>
    <label>Descreva o produto: </label>
    <input
        type = "text"
        name = "desricao"
        value = "{{old('descricao')}}"
    >
    @error('descricao')
    {{$message}}
    @enderror
    <br>
    <label>Digite o preco do produto: </label>
    <input
        type = "number"
        name = "preco"
    >
    @error('preco')
    {{$message}}
    @enderror
    <br>
    <label>Anexe a imagem do produto: </label>
    <input
        type = "file"
        name = "img"
    >
    @error('img')
    {{$message}}
    @enderror
    <br>
    <button type = "submit">Salvar</button>

    
</form>

@endsection