@extends('template')
@section('content')
<h1>Question's Tilte</h1>
<h1>{{ $question->title }}</h1>
<p class="lead">
Question's Description
{{ $question->description}}
</p>
<hr />
@endsection