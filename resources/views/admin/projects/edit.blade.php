@extends('layouts.app')

@section('content')

<h1 class="text-center">Modifica Progetto</h1>


@if ($errors->any())

<div class="cont-errors">


    <ul>
        @foreach ($errors->all() as $error )
            <li>{{$error}}</li>
        @endforeach
    </ul>

</div>

@endif


<div class="container my-3 ib-form">
    <form action="{{route('admin.projects.update',$project)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nome Progetto</label>
        <input type="text" class="form-control @error('name') error @enderror" value="{{$project->name}}"  placeholder="Inserisci nome progetto" name="name">
        @error('name') <p>{{$message}}</p> @enderror
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nome cliente</label>
        <input type="text" class="form-control  @error('client_name') error @enderror "  value="{{$project->client_name}}" placeholder="Inserisci il nome del cliente" name="client_name">
        @error('client_name') <p> {{$message}} </p> @enderror
      </div>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tipo di progetto</label>
        <select name="type_id" id="" class="form-control" >
            <option value="">Seleziona il tipo di progetto</option>
            @foreach ($types as $type )
                <option @if ($type->id == old('type_id', $project->type?->id )) selected @endif value="{{$type->id}}">{{$type->name}}</option>
            @endforeach
        </select>
      </div>


      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Immagine</label>
        <input type="file" onchange="showImage(event)" class="form-control @error('cover_image') error @enderror"   placeholder="Inserisci immagine" name="cover_image">
        @error('cover_image') <p> {{$message}} </p> @enderror
        <div class="cont-output">
            <img src="{{asset('storage/' . $project->cover_image )}}"" alt="" id="output-image">
        </div>

    </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Descrizione</label>
        <textarea class="form-control  @error('summary') error @enderror  "  rows="5" name="summary">{{$project->summary}}</textarea>
        @error('summary') <p> {{$message}} </p>  @enderror
      </div>

      <button class="btn btn-primary" type="submit" >Invia</button>

    </form>

</div>

<script>
    function showImage(event){
        const tagImage = document.getElementById('output-image');
        tagImage.src = URL.createObjectURL(event.target.files[0]);
    }
</script>

@endsection
