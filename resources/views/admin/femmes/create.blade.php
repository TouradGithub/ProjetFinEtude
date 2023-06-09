@extends('layouts.master')
@php
    $langs = App\Models\Languages::all();
@endphp
@section('css')
    @toastr_css
@section('title')
Fammes
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
  Ajouter
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
                            <form action="{{route('fammes.store')}}" method="post" enctype="multipart/form-data">
                             @csrf
                            <div class="form-row">

                                <div class="col">
                                    <label for="title">Nom</label>
                                    <input type="text" name="nom" class="form-control">
                                    @error('nom')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="title">Age</label>
                                    <input type="number" name="age" class="form-control">
                                    @error('age')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <br>


                            <div class="form-row">
                                <div class="col">
                                    <label for="title">Salaire</label>
                                    <input type="number" name="salaire" class="form-control">
                                    @error('salaire')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="title">Etat</label>
                                    <select class="custom-select my-1 mr-sm-2" name="etat">
                                        <option selected disabled>choisir...</option>
                                        <option value="12H">12H</option>
                                        <option value="24H">24H</option>
                                    </select>
                                    @error('etat')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col">
                                    <label for="title">language:</label>
                                    @foreach ($langs as $item)
                                      <label class="d-block" for="edo-ani5">
                                        <input class="checkbox_animated" id="lang_{{ $item->id }}" name="lang[{{ $item->id }}]" value="{{ $item->id }}" type="checkbox" data-original-title="" title="">{{ $item->name }}
                                      </label>
                                    @endforeach



                                    @error('lang')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="title">Bébé</label>
                                    <select class="custom-select my-1 mr-sm-2" name="enfant">
                                        <option selected disabled>choisir...</option>
                                        <option value="1">oui</option>
                                        <option value="0">non</option>
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
                                            <option value="Nouakchott sud">Nouakchott sud                                            </option>
                                            <option  value="Nouakchott ouest">Nouakchott ouest</option>
                                            <option  value="Nouakchott nord">Nouakchott nord </option>
                                        </select>
                                    </div>
                                    @error('addrsse')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="title">disponible</label>
                                    <select class="custom-select my-1 mr-sm-2" name="disponible">
                                        <option selected disabled>choisir...</option>

                                        <option value="1">oui</option>
                                        <option value="2">non</option>

                                    </select>
                                    @error('disponible')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <br>

                            <div class="form-row">

                                <div class="col">
                                    <label for="academic_year">Image  : <span class="text-danger">*</span></label>
                                    <input type="file" accept="image/*" name="image" >
                                    @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Descrption</label>
                                <textarea class="form-control" name="descrption"
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
