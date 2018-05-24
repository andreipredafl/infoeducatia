@extends('layouts.app')

@section('content')


    <div class="row">
        <div class="col-md-12">
            <br>
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(\Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                </div>
            @endif

            <form method="post" action="{{ url('detail') }}">
                {{ csrf_field() }}

                <div class="container">

                    <div class="form-group">

                        <h1>Salut, poti copleta mai jos campurile!!</h1>
                    </div>

                    <div class="form-group">

                        <input type="text" name="age" placeholder="Age" class="form-control">

                    </div>

                    <div class="form-group">

                        <input type="text" name="weight" placeholder="Weight" class="form-control">

                    </div>

                    <div class="form-group">

                        <input type="submit" name="submit" class="btn btn-primary">

                    </div>

                </div>
            </form>

        </div>
    </div>


@endsection