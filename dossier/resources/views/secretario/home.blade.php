@extends('templates/secretario')
@extends('navs/secretario')

@section('css')
@endsection

@section('js')
@endsection

@section('pagina')
<a href="/arquivos" target="_blank" >Expandir</a>
<hr>
<iframe src="/arquivos"></iframe>
@endsection