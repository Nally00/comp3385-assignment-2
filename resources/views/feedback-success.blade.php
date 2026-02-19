@extends('layouts.app')


@section('content')

<div class="border text-center">
    <h1 class="text-success">Success!</h1>

    <p>{{session('success')}}</p>
    
    <p>Thank you for your feedback. We will review your feedback and get back to you.</p>

</div>


@endsection
