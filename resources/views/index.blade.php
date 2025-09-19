<<<<<<< HEAD
@extends('setting::layouts.master')
=======
nds('setting::layouts.master')
>>>>>>> 60ebf14 (.)

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('setting.name') !!}
    </p>
@endsection
