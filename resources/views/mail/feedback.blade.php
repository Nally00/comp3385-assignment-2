
@extends('layouts.email')


@section('content')
<p>{{ $fullname }} has sent feedback about your website. Below are the comments left by: </p>
<p>{{ $comment}}</p>
@endsection