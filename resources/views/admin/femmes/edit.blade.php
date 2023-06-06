@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
Fammes
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
  Modifier
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">

                    @if(session()->has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ session()->get('error') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">


                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <br>
                            <form action="{{route('fammes.update',$femme->id)}}" method="post" enctype="multipart/form-data">
                             @csrf
                            <div class="form-row">

                                <div class="col">
                                    <label for="title">Nom</label>
                                    <input type="text" value="{{ $femme->nom }}" name="nom" class="form-control">
                                    @error('nom')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="title">Age</label>
                                    <input type="number" value="{{ $femme->age }}" name="age" class="form-control">
                                    @error('age')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <br>


                            <div class="form-row">
                                <div class="col">
                                    <label for="title">Salaire</label>
                                    <input type="number" value="{{ $femme->salaire }}" name="salaire" class="form-control">
                                    @error('salaire')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="title">Etat</label>
                                    <select class="custom-select my-1 mr-sm-2" name="etat">
                                        <option @if ($femme->lang=="12H") selected @endif value="12H">12H</option>
                                        <option @if ($femme->lang=="24H") selected @endif value="24H">24H</option>
                                    </select>
                                    @error('etat')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col">
                                    <label for="title">lang</label>
                                    <select class="custom-select my-1 mr-sm-2" name="lang">
                                        <option selected disabled>choisir...</option>
                                        <option @if ($femme->lang=="arabic") selected @endif value="arabic">Arabic</option>
                                        <option @if ($femme->lang=="francais") selected @endif value="francais">Francais</option>
                                        <option @if ($femme->lang=="english") selected @endif value="english">English</option>
                                    </select>
                                    @error('lang')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="title">enfant</label>
                                    <select class="custom-select my-1 mr-sm-2" name="enfant">
                                        <option @if ($femme->enfant==1) selected @endif  value="1">oui</option>
                                        <option  @if ($femme->enfant==0) selected @endif  value="0">non</option>
                                    </select>
                                    @error('enfant')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <br>

                            <br>

                            <div class="form-row">
                                <div class="col">
                                    <label for="title">addrsse</label>
                                    <div class='input-group date'>
                                        <select class="custom-select my-1 mr-sm-2" name="addrsse">
                                            <option @if ($femme->lang=="1") selected @endif value="1">Nouakchott sud                                            </option>
                                            <option @if ($femme->lang=="2") selected @endif value="2">Nouakchott ouest</option>
                                            <option @if ($femme->lang=="3") selected @endif value="3">Nouakchott nord </option>
                                        </select>                                    </div>
                                    @error('addrsse')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="title">disponible</label>
                                    <select class="custom-select my-1 mr-sm-2" name="disponible">

                                        <option @if ($femme->disponible==1) selected @endif value="1">oui</option>
                                        <option @if ($femme->disponible==0) selected @endif value="0">non</option>

                                    </select>
                                    @error('disponible')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <br>

                            <div class="form-row">

                                <div class="col-md-3">
                                    <label for="academic_year">Image  : <span class="text-danger">*</span></label>
                                    <input type="file"  accept="image/*" name="image" >
                                    @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-3">
                                    <img src="{{ asset('fammes/'.$femme->image) }}" style="width:90px;height: 80px;" alt="">
                                </div>
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Descrption</label>
                                <textarea class="form-control" value="{{ $femme->description }}" name="descrption"
                                          id="exampleFormControlTextarea1" rows="4"></textarea>
                                @error('descrption')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">Ajouter</button>
                    </form>
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
