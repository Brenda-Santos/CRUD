@extends('templates.template')

@section('content')

    <h1 class="text-center mt-5">Cadastrar</h1>

    

    <div class="col-8 m-auto">
    
    <form name='formCad' id='formCad' method='post' action='{{url('books')}}'>
    @csrf
    <input class='form-control mt-5' type='text' name='title' id='title' placeholder='Título'>
    <select class='form-control mt-4' name='id_user' id='id_user'>
    <option value=''>Autor</option>
        @foreach($users as $user)
            <option value='{{$user->id}}'>{{$user->name}}</option>
        @endforeach
    </select>
    <input class='form-control mt-4' type='text' name='pages' id='pages' placeholder='Páginas'>
    <input class='form-control mt-4' type='text' name='price' id='price' placeholder='Preço'>
    <input class='btn btn-primary mt-4' type='submit' value='Cadastrar'>
    </form>
    

    </div>

@endsection