@extends('layouts.app')

@section('title', 'Dashboard Siswa')

@section('content')
    <h2>Selamat datang, {{ auth()->user()->name }}</h2>
    <p>Ini adalah dashboard siswa.</p>
@endsection
