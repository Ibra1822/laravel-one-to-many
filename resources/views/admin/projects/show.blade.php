@extends('layouts.app')

@section('content')
<div class="container-fluid  text-center ib-show">

<h1> Nome Progetto : {{$project->name}}</h1>
<h2>Nome Cliente : {{$project->client_name}}</h2>
@if ($project->cover_image)

<img src="{{asset('storage/' . $project->cover_image )}}" alt="{{$project->original_image_name}}">
@else
<img src="https://troianiortodonzia.it/wp-content/uploads/2016/10/orionthemes-placeholder-image.png" alt="">
@endif
<h2> Tipo di progetto : {{$project->type?->name}}</h2>

<p>{{$project->original_image_name}}</p>
<p>Descrizzione : {{$project->summary}}</p>

<a class="btn btn-dark" href="{{route('admin.projects.index')}}">Torna sui Progetti</a>


</div>

@endsection
