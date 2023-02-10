@extends("layouts.main")

@section("title", "produto")

@section("content")
    <h1>bem vindo</h1>

    @if($id !== null):
        <h1>Exibindo o produto de id: {{ $id }}</h1>
    @endif
@endsection