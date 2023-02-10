@extends("layouts.main")

@section("title", "produtos")

@section("content")

    <h1>pagina de produtos</h1>
    @if($busca):
        <p>produto: {{ $busca }}</p>
    @endif
@endsection