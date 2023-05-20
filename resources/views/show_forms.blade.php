@extends('layouts.default')
@section('content') 
 
 
<main id="main">
   
<div class="container">
   
       <div class="row" style="background-color: #EFEFEF; margin-bottom: 10px; margin-top: 10px">
          <div class="col-9">
            <b>عرض النماذج التي قمت بملئها</b> 
          </div>
      
           <div class="col-3">
               <b><a href=" {{ url('home') }}" title="الصفحة الرئسية" style="float: left; padding-right: 10px"><i class="bx bx-home-alt"  style="font-size:30px"></i></a></b>
          
          
          </div>
      </div>

      <div class="row">
      @if (\Session::has('msg'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('msg') !!}</li>
        </ul>
    </div>
     
@endif
        @foreach($forms_template as $data)
      <div class="col-2"> 
          <a href="../public/user_forms/{{$data->id}}">
         <i class="bx bx-file" style="font-size: 80px"> </i>
         <p style="text-align: right; width: 80%;">{{ $data->form_name}} </p>  
         </a> 
     </div>
         @endforeach
    </div>

    <div class="row" style="background-color: #EFEFEF; margin-bottom: 10px; margin-top: 10px">
          <div class="col-9">
            <b> عرض نمازج الواردة   </b> 
          </div>
      
            
      </div>
      <div class="row">
    @foreach($other_forms as $data)
      <div class="col-2"> 
          <a href="../public/other_forms/{{$data->id}}">
         <i class="bx bx-file" style="font-size: 80px"> </i>
         <p style="text-align: right; width: 80%;">{{ $data->form_name}} </p>  
         </a> 
     </div>
         @endforeach
</div>
   </main><!-- End #main -->
 

@stop