@extends('layouts.default')
@section('content') 
 
 
<main id="main">
   
<div class="container">
   
       <div class="row" style="background-color: #EFEFEF; margin-bottom: 10px; margin-top: 10px">
          <div class="col-9">
            <b> إضافة نموذج</b> 
          </div>
      
           <div class="col-3">
              <b><a href=" {{ url('user_forms/'.$student_id) }}" style="float: left; padding-right: 10px">رجوع>></a></b>
              <b><a href=" {{ url('home') }}" style="float: left; padding-right: 10px">الرئيسية</a></b>
           <!--    <a href="student_forms/{{$student_id}}"  -->
           </div>
      </div>

      <div class="row">
        @foreach($forms_template as $data)
      <div class="col-2"> 
          <a href="../getFormTemplate/{{$student_id}}/{{ $data->id}}">
         <i class="bx bx-file" style="font-size: 80px"> </i>
         <p style="text-align: right; width: 80%;">{{ $data->form_name}} </p>  
         </a> 
     </div>
         @endforeach
    </div>
</div>
   </main><!-- End #main -->
 

@stop