@extends('layouts.default')
@section('content') 
<main id="main">
<div class="container">
<div class="row">
       <div class="row" style="background-color: #EFEFEF; margin-bottom: 10px; margin-top: 10px">
         <div class="col-9">
           <b>عرض نموذج</b> 
         </div>
          <div class="col-3">
            <b> </b>
  
           </div>
     </div>
     <div class="col-sm-12 col-md-8" style="margin: auto;">
     @if(Session::has('message'))
<div class="alert {{ Session::get('alert-class', 'alert-info') }} alert-dismissible fade show">
    {{ Session::get('message') }}
    
</div>
@endif
<h2 style="text-align: center; padding: 15px; text-decoration: underline;"><?php echo $form_template->form_name; ?></h2>

  <h2>الاستبيانات المعبئة</h2>
 <div class="row">
 <!--   <table class="table">
     <thead><tr>
      
       <th>البريد الالكتروني</th>
       <th>القسم</th>
       <th>عرض</th>
</tr>
<thead>
  <tbody>

        @foreach($student_questionair as $data)
   
      <tr> 
          <td> <p>{{ $data->email}} </p>    </td>                  
           <td>{{ $data->dept}}</td>
            <td>
              <a href="../answers/{{$data->std_id}}/{{ $data->std_ques_id}}/{{ $data->form_name}}">عرض الاستبيان
            </a>
            </td>
</tr>
         @endforeach
</tbody>
</table> -->
<!-- 
<form method="post"  action="">
    @csrf
<input type="hidden" name="form_id" value="{{$form_template->id }}" >
 <h2 style="text-align: center; padding: 15px; text-decoration: underline;"><?php echo $form_template->form_name; ?></h2>
<?php echo $form_template->form_html; ?>
 
 -->

  

    
    </div> <!--container -->
  </div><!--row-->
   </main><!-- End #main -->
   <style type="text/css">
.form-control, select {
    pointer-events: none;
 }
 .btn {
 display: none;
}
</style>
@stop