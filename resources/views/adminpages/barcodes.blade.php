@extends('layouts.app')

@section('content')


    <div class="classes-buttons">
        <a href="{{ url('/') }}/barcodes/create">
            <input type="button" class="btn btn-primary active" value="Inseraza varsta si greutatea ta">
        </a>
    </div>

@endsection