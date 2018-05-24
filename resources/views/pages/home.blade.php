@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>

                    <h1>Sall,boss!</h1>
                    <p>acest buton duce la pagina cu detalii a utilizatorului</p>

                    @if(Auth::check())
                        <div class="classes-buttons">
                            @php
                                $id = Auth::user()->id;
                            @endphp
                            <a href="{{ url('/') }}/detail/{{ $id }}">
                                <input type="button" class="btn btn-primary active" value="Contul Tau">
                            </a>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection
