@extends('layouts.app')

@section('title', 'Dashboard Guru')

@section('content')
    <h2>Selamat datang, {{ auth()->user()->name }}</h2>
    <p>Ini adalah dashboard guru.</p>
@endsection
