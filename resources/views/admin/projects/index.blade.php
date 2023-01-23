@extends('layouts.app')

@section('content')
<h1 class="text-center mb-3">Projects</h1>

<div class="container text-center">

<a class="btn btn-dark mb-4" href="{{route('admin.projects.create')}}">Crea Un Nuovo Progetto</a>

</div>

<div class="container index-cont">
 @foreach ($projects as $project )
<div class="ib-card-index p-4">
  <div class="card-up">
    @if ($project->cover_image)
    <img src="{{asset('storage/' . $project->cover_image )}}" alt="">
    @else
    <img src="https://troianiortodonzia.it/wp-content/uploads/2016/10/orionthemes-placeholder-image.png" alt="">
    @endif
</div>
  <div class="card-down">
    <h5 class="my-3">{{$project->name}}  </h5>
    <h6 class="text-decoration-underline">{{$project->type?->name}}</h6>
    <div class="d-flex justify-content-center align-items-center ">
        <a class="btn btn-light" href="{{route('admin.projects.show',$project)}}"><i class="fa-solid fa-eye"></i></a>
        <a class="btn btn-light" href="{{route('admin.projects.edit',$project)}}"><i class="fa-solid fa-pen"></i></a>
        <form onsubmit="return confirm('Sei sicuro di voler eliminare questo elemento')" action="{{route('admin.projects.destroy',$project)}}" method="POST" >
        @csrf
        @method('DELETE')
            <button type="submit" class="btn btn-light"><i class="fa-solid fa-trash-can"></i></button>
        </form>
    </div>
  </div>
</div>

    @endforeach

</div>
<div class="cont-pagination d-flex justify-content-between my-5">
   <p>{{$projects->links()}}</p>
</div>


@endsection
