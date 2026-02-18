@extends('layouts.app')

@section('content')

<h1>Feedback Form</h1>

<form method="POST" action="/feedback/send">
    @csrf

    <label for="full_name">
        Full Name <span style="color:red;">(Required)</span>
        
    </label>

    <input type="text" id="full_name" name="full_name" required class="form-control">

    <br>

    <label for="email">
        Email <span style="color:red;">(Required)</span>
    </label>

    <input type="email" id="email" name="email" required class="form-control">

    <br>

    <label for="comments">
        Comments <span style="color:red;">(Required)</span></label>
    <textarea id="comments" name="comments" required class="form-control" rows="4"></textarea>

    <p>Let us know what you think of our website.</p>

    <button type="submit" class="btn btn-primary">
        Submit
    </button>

</form>

@endsection
