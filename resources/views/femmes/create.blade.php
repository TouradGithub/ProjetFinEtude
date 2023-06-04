@extends('adminlte::page')


@section('title')
 Ajout d'une nouvelle femme de menage| Aide a domicile
@endsection

@section('content_header')
   <h1> Ajout d'une nouvelle femme de menage </h1>
@endsection

@section('content')
    <div class="container ">
        <div class="row ">
            <div class="col-md-10 mx-auto">
                <div class="card-My-5 ">
                    <div class="card-header">
                        <div class="text-center font-weight-bold text-uppercase">
                            <h3>Ajout d'une nouvelle femme de menage</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('femmes.store')}}"
                            methode="post" class="mt-3"></form>
                            @csrf 
                            <div class="form-group mb-3">
                                <label for="Nom">Nom</label>
                                <input type="text" class="form-control"
                                   name="Nom" placeholder="Nom"
                                   value="{{old('Nom')}}">
                            </div>
                    </div>
                    
                </div>
                
                 

            </div>
        </div>
    </div>


@endsection