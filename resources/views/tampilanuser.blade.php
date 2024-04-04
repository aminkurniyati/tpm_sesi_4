@extends('template')
@section('main')
    <h1>Hello {{ Auth::user()->name }} </h1>
    <p>Ini halaman User</p>
@endsection