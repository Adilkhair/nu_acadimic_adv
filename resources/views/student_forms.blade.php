@extends('layouts.default')
@section('content') 
 
 
<main id="main">
   
   
   <div class="container">
   <div class="row">
     <div class="col-sm-12 col-md-3">
       <div class="card" style="width: 100%;">
       <!--<img src="assets/img/logo.png" class="card-img-top" alt="...">-->
              <i class="bx bx-user" style="font-size: 150px; justify-content: center; text-align: center; background-color:#EFEFEF "></i>
              
  
        <div class="card-body">
         <p  style="" class="card-text"><i class="bx bx-id-card" style="font-size: 25px"> </i> <?php echo $student->user->name; ?></p>
         <p class="card-text"><i class="bx bx-phone"  style="font-size: 25px"> </i> <?php echo $student->telephone; ?></p>
         <p class="card-text"><i class="bx bx-mail-send" style="font-size: 25px"> </i> <?php echo $student->email; ?> </p>
         <p class="card-text"> <?php echo $student->level ; ?></p>
 
        </div>
       </div>  <br/><br/><br/>
     </div>
   
     <div class="col-sm-12 col-md-9">
       <div class="row" style="background-color: #EFEFEF; margin-bottom: 10px; margin-top: 10px">
         <div class="col-9">
           <b>النماذج المعبئة</b> 
         </div>
      
          <div class="col-3">
           <!--  <b><a href="../students" style="float: left; padding-right: 10px"> <i class="bx bx-arrow-back" style="font-size:30px"></i></a></b>
            <b><a href="../getFormsTemplate/{{$student->id}}" style="float: left; padding-left: 10px">  + <i class="bx bx-file" style="font-size:20px"></i> </a></b>
  -->
           </div>
      </div>
      
      
      <div class="row"  >
    

                <!--<div class="col"><a type="button" href="morshid_student_form_details.html" class="btn btn-success">نموذج عرض مشكلة اكاديمية </a></div>
                    <div class="col"><button type="button" class="btn btn-success">نموذج الطالب المتفوق</button></div>
                   <div class="col"><button type="button" class="btn btn-success">نموذج الطالب المتفوق</button></div>
 -->
@foreach($student_questionair as $data)
<div class="col-4 col-md-4 col-sm-6" style="margin: auto"> 
<a href="../answers/{{ $data->student_id}}/{{ $data->id}}/{{$data->form_name}}">
 
<i class="bx bx-file" style="font-size: 80px"> </i>
  <p style="text-align: right; width: 80%;">{{ $data->form_name}}</p>  
  <p style="text-align: right; width: 80%;"><i class="bx bx-time" style="font-size: 25px"></i> {{$data->date}}</p>  

</a> 
</div>
@endforeach

      <br/><br/><br/>
     </div>
      
      <!--  <div class="row" style="background-color: #EFEFEF; margin-bottom: 10px">
       <div class="col-6">
      قيد الانتظاؤ  المعباة
      </div>
       </div>
      
       <div class="row"  >  
           <div class="col">  <button type="button" class="btn btn-danger">نموذج الطالب المتفوق</button> </div>
                 <div class="col"> <button type="button" class="btn btn-danger">نموذج الطالب المتفوق</button></div> 
                 <div class="col"> <button type="button" class="btn btn-danger">نموذج الطالب المتفوق</button></div>
          <br/> <br/> <br/>
     </div> -->
     
      <div class="row" style="background-color: #EFEFEF; margin-bottom: 10px"> 
       <!-- <div class="col-10">
        نمازج المشرف
      </div>
      <div class="col-2">
       إضافة+
      </div> -->
     </div>
     
      <div class="row"  >
           
           <!--  <div class="col"><button type="button" class="btn btn-secondary">نموذج رعاية الطالب المتفوق</button></div>
              <div class="col"><button type="button" class="btn btn-secondary">نموذج رعاية الطالب المتفوق</button></div>
              <div class="col"><button type="button" class="btn btn-secondary">نموذج رعاية الطالب المتفوق</button></div>
           -->
     </div>
      
   
     </div>
      
   </div>
 </div>
  
   </main><!-- End #main -->
 

@stop