@extends('template')
@section('content')
<div class="container">
    <h1>Recent Questions :</h1>
    <hr />
    @foreach ($qs as $question)
    <div class="well">
        <h3>{{ $question->title }}</h3> 
        <p>
           {{ $question->description }}
        </p>   
        <span> {{ $question->created_at }}</span>
        <a href="{{ route('questions.show', $question->id)}}" class="btn btn-primary btn-sm">View Details</a>
    </div>

    @endforeach   
    {{ $qs->links()  }} 
</div>
@endsection