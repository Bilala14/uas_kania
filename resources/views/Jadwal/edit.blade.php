@extends('layouts.template')

@section('content')
<div class="container">
    <h4>Edit Jadwal</h4>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ url('jadwal/' . $jadwal->id) }}" method="POST">
        @method('PUT')
        @include('jadwal.form')
    </form>
</div>
@endsection
