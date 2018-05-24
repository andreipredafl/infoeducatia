@extends('layouts.app')

@section('content')

    <p style="color: red;">Aici a sa iau in fct de user userid si o sa ii afisez pe pagina informatiile lui</p>
    <br>

    <div class="classes-buttons">
        <a href="{{ url('/') }}/detail/create">
            <input type="button" class="btn btn-primary active" value="Inseraza varsta si greutatea ta">
        </a>
    </div>

    @php
        $id = Auth::user()->id;
    @endphp

    <div class="classes-buttons">
        <a href="{{ url('/') }}/detail/{{ $id }}/edit">
            <input type="button" class="btn btn-primary active" value="Updateaza varsta si greutatea ta">
        </a>
    </div>

    {{--<div class="container">--}}
        {{--{{ $details->age }}--}}
        {{--{{ $details->weight }}--}}
    {{--</div>--}}

@endsection