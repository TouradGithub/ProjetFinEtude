@extends('adminlte::page')

@section('plugins.Datatables',true)

@section('title')
     Liste des femme de menage | Aide a domicile
@endsection

@section('content_header')
   <h1> Liste des femme de menage </h1>
@endsection

@section('content')
    <div class="container ">
        <div class="row ">
            <div class="col-md-10 mx-auto">
                <div class="card-My-5 ">
                    <div class="card-header">
                        <div class="text-center font-weight-bold text-uppercase">
                            <h3>Femmes de menage</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="myTable" class="table table-bordered table stripped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nom</th>
                                    <th>Age</th>
                                    <th>Salaire</th>
                                    <th>Etat</th>
                                    <th>Lieu-de-travail</th>
                                    <th></th>
                                </tr>
                           </thead>
                           <tbody>
                            @foreach ($femmes as $key => $femme)
                                <tr>
                                    <td>{{$key+=1}}</td>
                                    <td>{{$femme->Nom}}</td>
                                    <td>{{$femme->Age}}</td>
                                    <td>{{$femme->Salaire}}</td>
                                    <td>{{$femme->Etat}}</td>
                                    <td>{{$femme->Lieu_travail}}</td>
                                    <td class="d-flex justify-content-center align-items-center">
                                        <a href="{{route('femmes.show',$femme->id)}}"
                                             class="btn btn-sm btn-primary">
                                             <i class="fas fa-eye"></i>

                                        </a>
                                        <a href="{{route('femmes.edit',$femme->id)}}"
                                             class="btn btn-sm btn-warning mx-2">
                                             <i class="fas fa-edit"></i>

                                        </a>
                                        <form action="{{route('femmes.destroy',$femme->id)}}" methode="post">
                                            
                                        </form>
                                         <button type="submit"
                                         class="btn btn-sm btn-danger">
                                             <i class="fas fa-trash"></i>
                                         </button>
                        
                                            
                                        

                                    </td>
                                    
                                    
                                </tr>

                            
                            @endforeach
                           </tbody>

                        </table>
                    </div>
                    
                </div>
                
                 

            </div>
        </div>
    </div>


@endsection
@section('js')
    <script>
        $(document).ready(function(){
            $('#myTable').DataTable({
                dom : 'Bfrtip',
                buttons:[
                    'copy','csv','execel','pdf','print',
                ]
            });

        });
    </script>

@endsection