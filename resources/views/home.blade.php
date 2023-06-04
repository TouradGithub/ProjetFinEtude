@extends('adminlte::page')

@section('title')
     Home | Aide a domicile
@endsection

@section('content_header')
   <h1> Dashboard </h1>
@endsection

@section('content')
    <div class="container ">
        <div class="row my-5">
            <div class="col-md-4">
                 <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{\App\Models\Femme::count()}}</h3>
                        <p> Femmes de menage</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <a href="{{url('/femmes')}}" class="small-box-footer">
                        Plus d'information <i class="fas fa-arrow-circle-right"></i>
                      
                        
                     
                 </div>

            </div>
        </div>
    </div>


@endsection