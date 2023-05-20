@extends('layouts.default')
@section('content') 
<main id="main">
<div class="container">
<div class="row">
       <div class="row" style="background-color: #EFEFEF; margin-bottom: 10px; margin-top: 10px">
         <div class="col-9">
           <b>إضافة نموذج</b> 
         </div>
          <div class="col-3">
          <b><a href=" {{ url('user_forms/'.$student_id) }}" style="float: left; padding-right: 10px">  <i class="bx bx-arrow-back" style="font-size: 30px"></i></a></b>
    <a href=" {{ url('home') }}" title="الصفحة الرئسية" style="float: left; padding-right: 10px"><i class="bx bx-home-alt"  style="font-size:30px"></i></a>  
     <a   onclick="printDiv('print-content')" style="float: left; padding-right: 10px" > <i class="bx bx-printer" style="font-size: 30px;  background-color:#EFEFEF "></i></a> 
   <a href="" onclick="html_to_pdf()" style="float: left; padding-right: 10px" text="تحميل ملف pdf" ><i style="font-size:30px" class="bx bx-download"></i></a>
     
  </div>
     </div>
     <div class="col-sm-12 col-md-8" style="margin: auto;">
     @if(Session::has('message'))
<div class="alert {{ Session::get('alert-class', 'alert-info') }} alert-dismissible fade show">
    {{ Session::get('message') }}
    
</div>
@endif
<form method="post" action="{{url('save_std_quest')}}">  
    @csrf
<input type="hidden" name="form_id" value="{{$form_template->id }}" >
<input type="hidden" name="student_id" value="{{$student_id }}" >
<h2 style="text-align: center; padding: 15px; text-decoration: underline;"><?php echo $form_template->form_name; ?></h2>
<?php echo $form_template->form_html; ?>
 



    
    </div> <!--container -->


    
   
<div class="row" style="background-color: #EFEFEF; margin-bottom: 10px; margin-top: 10px">
          <div class="col-9">
            <b>إضافة نموذج</b> 
          </div>
      
           <div class="col-3">
     <b><a href=" {{ url('user_forms/'.$student_id) }}" style="float: left; padding-right: 10px">  <i class="bx bx-arrow-back" style="font-size: 30px"></i></a></b>
    <a href=" {{ url('home') }}" title="الصفحة الرئسية" style="float: left; padding-right: 10px"><i class="bx bx-home-alt"  style="font-size:30px"></i></a>  
     <a   onclick="printDiv('print-content')" style="float: left; padding-right: 10px" > <i class="bx bx-printer" style="font-size: 30px;  background-color:#EFEFEF "></i></a> 
   <a href="" onclick="html_to_pdf()" style="float: left; padding-right: 10px" text="تحميل ملف pdf" ><i style="font-size:30px" class="bx bx-download"></i></a>
     
          
          </div>
      </div>
  </div><!--row-->
   </main><!-- End #main -->
 

@stop