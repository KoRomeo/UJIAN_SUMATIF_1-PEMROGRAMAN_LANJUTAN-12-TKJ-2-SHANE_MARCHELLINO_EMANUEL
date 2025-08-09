@extends('layouts.app')

@section('content')
<h1 class="text-center text-2xl font-bold mb-4">Profil Siswa</h1>
<x-card-show 
    :id="$student['id']" 
    :username="$student['username']"
    :nama="$student['nama']"
    :kelas="$student['kelas']"
    :hobi="$student['hobi']"
    :foto="$student['foto']"
    :deskripsi="$student['deskripsi']"
/>

@endsection