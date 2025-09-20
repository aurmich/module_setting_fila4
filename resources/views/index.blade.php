<<<<<<< HEAD
nds('setting::layouts.master')
=======
@extends('setting::layouts.master')
>>>>>>> 9bba149 (.)

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('setting.name') !!}
    </p>
@endsection
