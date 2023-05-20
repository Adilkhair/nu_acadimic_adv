@extends('layouts.default')
@section('content') 
 
  
<main id="main">
<div class="container">
<div class="row">
<div class="col-sm-12 col-md-3">
      <div class="card"  >
       <!--<img src="assets/img/logo.png" class="card-img-top" alt="...">-->
              <i class="bx bx-user" style="font-size: 100px; justify-content: center; text-align: center; background-color:#EFEFEF "></i>
              
  
        <div class="card-body">
         <p class="card-text"><?php echo $user->name; ?></p>
      <p class="card-text"><?php echo $user->email; ?></p>
        <!--  <p class="card-text"> <?php echo $user->name; ?> </p>
         <p class="card-text"> <?php echo $user->name;  ?></p> -->
 
        </div>
       </div>
     </div>

     <div class="col-sm-12 col-md-9" >
     <div class="col-sm-2 col-md-2" >
    
    </div>
     @if (\Session::has('msg'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('msg') !!}</li>
        </ul>
    </div>
     
@endif

<div class="row" style="background-color: #EFEFEF; margin-bottom: 10px; margin-top: 10px">
          <div class="col-9">
            <b>عرض تفاصيل النماذج التي قمت بملئها</b> 
          </div>
      
           <div class="col-3">
              <a href=" {{ url('home') }}" title="الصفحة الرئسية" style="float: left; padding-right: 10px"><i class="bx bx-home-alt"  style="font-size:30px"></i></a>  
               <a href=" {{ url('delete_form/'.$quesr_id) }}" style="float: left; padding-right: 10px" onclick="return confirm('تريد حذف النموذج؟')" ><i class="bx bx-trash" style="font-size: 30px;  background-color:#EFEFEF "></i></a> 
     <a   onclick="printDiv('print-content')" style="float: left; padding-right: 10px" > <i class="bx bx-printer" style="font-size: 30px;  background-color:#EFEFEF "></i></a> 
<a  onclick="html_to_pdf('print-content')" style="float: left; padding-right: 10px" text="تحميل ملف pdf" ><i style="font-size:30px" class="bx bx-download"></i></a>
   
          
          </div>
      </div>

      <div id="print-content">
     <?php if($form_name=="نموذج الحذف والإضافة"){ ?>
<div class="row" >
   <div class="col-sm-9 col-md-8" >
      <h2  style="padding: 15px">إسم النموذج: {{$form_name}}</h2> 
     </div>
     <div class="col-sm-3 col-md-4" >
    
      @if ($student_questionair[0]->status == 1)
       
        <i class="bx bx-user-check"  style="font-size: 40px; color:green"></i>   
        @elseif ($student_questionair[0]->status == 2)
        <p  style="display: inline; color:red">لم يتم/</p>
       <p  style="display: inline; color:red">{{$student_questionair[0]->comment}}</p>
      <!--  <i class="bx bx-cancel"  style="font-size: 40px; color:red"></i>  -->
      @elseif (auth()->user()->current_team_id == 5)
      <form method="post" action="{{url('reg_action')}} ">
         @csrf
          
         <input type="hidden" name="id" value="{{$student_questionair[0]->id}}" />
            <select  style="display: inline;width:100px !important"  name="action" class="form-control"  required="required">
              <option value="2">لم يتم</option>
               <option value="1">تم</option>
            </select> 
         <input type="text"  class="form-control"   style="display: inline;width:140px !important"  name="comment" placeholder="التعليق" name="id" value="" />
           
        <button type="submit" class="btn"  style="margin-right: 0px; display: inline;">  
            <i class="bx bx-user-check" style="font-size: 30px"></i>  
        </button>
       </div>   
        </form>
      @endif
     </div>
    

 <div class="render">
<input id="q_no" name="q_no" type="hidden" value="23"> 
<table   width="90%" style="border: 1px solid; align: center"> 
<tr style="background-color: yellow"> 
   <th colspan="3">اليوم <input type="text"   name="a[]" disabled value="{{$answers[0]->answer}}" /> <input type="hidden"   name="q[]" value="اليوم" /></th>
    <th colspan="5">التاريخ <input type="date"   name="a[]" disabled  value="{{$answers[1]->answer}}"/> <input type="hidden"   name="q[]"  value="التاريخ" />  </th> 
    <th colspan="6">القسم <input type="text"   name="a[]" disabled  value="{{$answers[2]->answer}}" /><input type="hidden"   name="q[]" value="القسم" /> </th>
</tr>
<tr>
     
    <td  rowspan="2"> حذف/إضافة </td>
    <th  rowspan="2">المستوي</th>
    <th  rowspan="2"  style="width:20%">إسم الطالب</th>
    <th  rowspan="2">الرقم الجامعي</th>
    <th  rowspan="2">التخصص</th>
    <th colspan="3">حذف</th>
    <th colspan="4"  rowspan="2" style="width:20%" >ملاحظات</th> 
    <th  rowspan="2">المرشدة الأكاديمية</th>
    
</tr> 
<tr>
      <th>إسم المقرر</th> 
      <th>عدد الساعات</th> 
      <th>رقم الشعبة </th>
</tr> 
<?php $c= sizeof( $answers);  $rows= ($c - 3)/10; $j=3; ?>
<?php for($i=0; $i<($rows) ; $i++){  ?>
 

    <tr>
     
    <td>  <input type="hidden"    name="q[]" value="حذف/إضافة" >
    {{isset($answers[$j]->answer) ? $answers[$j++]->answer : 'dd' }}   </td>
    <td> <input type="hidden"   name="q[]" value="المستوي"  > <textarea  name="a[]"  disabled >   {{isset($answers[$j]->answer) ? $answers[$j++]->answer : '' }}   </textarea></td> 
    <td> <input type="hidden"   name="q[]" value="إسم الطالب" > <textarea name="a[]" disabled>   {{isset($answers[$j]->answer) ? $answers[$j++]->answer : '' }}   </textarea></td> 
    <td><input type="hidden"   name="q[]" value="الرقم الجامعي" > <textarea  name="a[]" disabled>  {{isset($answers[$j]->answer) ? $answers[$j++]->answer : '' }}   </textarea></td> 
    <td><input type="hidden"   name="q[]" value="التخصص" >  <textarea name="a[]" disabled>  {{isset($answers[$j]->answer) ? $answers[$j++]->answer : '' }}   </textarea></td> 
    <td><input type="hidden"   name="q[]" value="إسم المقرر" >  <textarea name="a[]" disabled>   {{isset($answers[$j]->answer) ? $answers[$j++]->answer : '' }}   </textarea></td> 
    <td><input type="hidden"   name="q[]" value="عدد الساعات" > <textarea style="width: 50px !important"   name="a[]" disabled >   {{isset($answers[$j]->answer) ? $answers[$j++]->answer : '' }}   </textarea></td>  
    <td><input type="hidden"   name="q[]" value="رقم الشعبة" >  <textarea style="width: 50px !important" name="a[]" disabled>  {{isset($answers[$j]->answer) ? $answers[$j++]->answer : '' }}   </textarea></td> 
    <td colspan="4"> 
    <input type="hidden"   name="q[]" value="ملاحظات" /> <textarea  name="a[]" disabled >  {{isset($answers[$j]->answer) ? $answers[$j++]->answer : '' }}   </textarea></td>  
    <td><input type="hidden"   name="q[]" value="المرشدة الأكاديمية" /> <textarea   name="a[]" disabled  >  {{isset($answers[$j]->answer) ? $answers[$j++]->answer : '' }}   </textarea  ></td> 
    </tr> 
 
<?php } ?>
</table>
</div>
 </form>

   
<?php } else { ?>
<p style="">إسم النموذج: {{$form_name}}</p>
@foreach($answers as $answer)
<div class="form-group row">
    <label for="std_name" class="col-4 col-form-label">{{$answer->question}}</label> 
    <div class="col-8">
      <input   type="text" class="form-control" value="{{$answer->answer}}" disabled="desabled">
    </div>
  </div>
 
@endforeach
<?php } ?>

 
<div class="row" style="background-color: #EFEFEF; margin-bottom: 10px; margin-top: 10px">
          <div class="col-9">
            <b>عرض تفاصيل النماذج التي قمت بملئها</b> 
          </div>
      
           <div class="col-3">
              <a href=" {{ url('home') }}" title="الصفحة الرئسية" style="float: left; padding-right: 10px"><i class="bx bx-home-alt"  style="font-size:30px"></i></a>  
               <a href="{{ url('delete_form/'.$quesr_id) }}" style="float: left; padding-right: 10px" onclick="return confirm('تريد حذف النموذج؟')" ><i class="bx bx-trash" style="font-size: 30px;  background-color:#EFEFEF "></i></a> 
     <a   onclick="printDiv('print-content')" style="float: left; padding-right: 10px" > <i class="bx bx-printer" style="font-size: 30px;  background-color:#EFEFEF "></i></a> 
<a onclick="html_to_pdf('print-content')" style="float: left; padding-right: 10px" text="تحميل ملف pdf" ><i style="font-size:30px" class="bx bx-download"></i></a>
   
          
          </div>
      </div>
 
</div> <!-- div col md - 9 -->
</div>
 </div>
 </div>
   </main><!-- End #main -->
   <br/> <br/><br/> 

@stop
