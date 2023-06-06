@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
Demandes
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    Liste Demandes
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="col-xl-12 mb-30">
                        <div class="card card-statistics h-100">
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nom User</th>
                                            <th>Nom Femme</th>
                                            <th> Femme Salaire</th>

                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i = 0; ?>
                                        @foreach($demandes as $item)
                                            <tr>
                                            <?php $i++; ?>
                                            <td>{{ $i }}</td>
                                            <td>{{$item->user->name}}</td>
                                            <td>{{$item->femme->nom}}</td>
                                            <td>{{$item->femme->salaire}}</td>
                                                <td>
                                                    @if ($item->active==0)
                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#delete_Teacher{{ $item->id }}" title="{{ trans('Grades_trans.Delete') }}">Accepter</button>

                                                    @endif
                                                </td>
                                            </tr>

                                            <div class="modal fade" id="delete_Teacher{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <form action="{{route('demande.accepter',$item->id)}}" method="post">

                                                        {{csrf_field()}}
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">Suprimer</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p> Voullez vous accepter la demande ??</p>
                                                            <input type="hidden" name="id"  value="{{$item->id}}">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">No</button>
                                                                <button type="submit"
                                                                        class="btn btn-danger">Oui</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
@section('js')
    @toastr_js
    @toastr_render
@endsection
