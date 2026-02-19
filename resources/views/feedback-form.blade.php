@extends('layouts.app')

@section('content')


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



<h1>Feedback Form</h1>

<form method="POST" action="/feedback/send">
    @csrf

    <label for="fullname">
        Full Name <span style="color:red;">(Required)</span>
        
    </label>

    <input type="text" id="fullname" name="fullname" required class="form-control">

    <br>

    <label for="email">
        Email <span style="color:red;">(Required)</span>
    </label>

    <input type="email" id="email" name="email" required class="form-control">

    <br>

    <label for="comment">
        Comments <span style="color:red;">(Required)</span></label>
    <textarea id="comment" name="comment" required class="form-control" rows="4"></textarea>

    <p>Let us know what you think of our website.</p>

    <button type="submit" class="btn btn-primary">
        Submit
    </button>

</form>

@endsection
