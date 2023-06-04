@php
$i=0;
@endphp
@extends('layouts1.app_front',[
])
@section('content')
<div class="col-12 p-0">


    <div class="col-12 row p-2 d-flex justify-content-center">
      @for ($i=0;$i<4;$i++)


      <div class="col-12 col-12 col-md-6 col-lg-3 ">
        <a href="" class="d-block">
          <div class="col-12 p-0 ">
            <img  src="{{ asset('userfront/images/default.png')}}" style="width:100%" >
            <div class="col-12 p-2 text-center ">
              <h2 style="font-size:15px;line-height: 1.8;">Title Test</h2>
            </div>
          </div>
        </a>
      </div>
      @endfor
    </div>
@endsection
