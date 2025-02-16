@extends('template')
@section('content')
<div class="container">
<h1>Question's Tilte</h1>
<h1>{{ $question->title }}</h1>
<p class="lead">
Question's Description
{{ $question->description}}
</p>
<hr />
<!-- displays all answers for this question -->
@if ($question->answers->count() > 0)
 @foreach($question->answers as $answer)
 <div class="panel manel-default">
  <div class="panel-body">
  <p>
    {{ $answer->content}}
  </p>
  </div>
 </div>  
 @endforeach
 @else
 <p>
 rhere  no answers for this question
 </p>
 @endif
 <hr>
 <form action="{{route('answers.store') }}" method="POST">
  {{ csrf_field() }}
<h4>submit your own Answer :</h4>
<textarea name="content" class="form-control" rows="4"></textarea>
<input type="hidden" name="question_id" value="{{ $question->id }}">
<button class="btn btn-primary" type="submit">submit Answer</button>
</form>
</div>
@endsection