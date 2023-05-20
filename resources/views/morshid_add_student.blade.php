@extends('layouts.default')
@section('content') 
   <!-- End Header -->

  <main id="main">
   
   <div class="container">  
   @if (\Session::has('msg'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('msg') !!}</li>
        </ul>
    </div>
@endif
   
<div class="row" style="background-color: #EFEFEF; margin-bottom: 10px; margin-top: 10px">
          <div class="col-9">
          <i class="bx bx-user" style="font-size: 20px">  <b>تسجيل بيانات الطالب</b> 
					          </i>
          </div>
      
           <div class="col-3">
              <a href=" {{ url('home') }}" title="الصفحة الرئسية" style="float: left; padding-right: 10px"><i class="bx bx-home-alt"  style="font-size:30px"></i></a>  
     <a   onclick="printDiv('print-content')" style="float: left; padding-right: 10px" > <i class="bx bx-printer" style="font-size: 30px;  background-color:#EFEFEF "></i></a> 
<a href="" onclick="html_to_pdf()" style="float: left; padding-right: 10px" text="تحميل ملف pdf" ><i style="font-size:30px" class="bx bx-download"></i></a>
   
          
          </div>
      </div>

     <div class="row">
	      <div class="col-md-12" style="display: inline; text-align: center">
		  <!--  <h2  style="display: inline">  +<i class="bx bx-user" style="font-size: 40px">
					          </i>إضافة طالب جديد</h2> 
							  <h4>ملف الطالب </h4>
							    <p>الإرشاد الاكاديمي </p> -->
		  </div>
		  
		  
<div class="col-md-6"  style="margin:auto">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{url('create_student')}}">

@csrf

  <div class="mb-3">
    <label for="name" class="form-label">إسم الطالب</label>
    <input type="text" name="name" id="name" class="form-control" >
    <input type="hidden" name="team_id" value="4"  >

    <div id="" class="form-text">الرجاء إدخال إسم الطالب كاملا</div>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">  البريد الالكتروني</label>
    <input type="text" name="email" class="form-control" id="email">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">  القسم</label>
    <input type="text" name="dept" class="form-control" id="">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">  المستوي</label>
    <input type="text" name="level" class="form-control" id="">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">  التلفون</label>
    <input type="text" name="telephone" class="form-control" id="">
  </div>

  <div class="mb-3">
    <label for="university_no" class="form-label">الرقم الجامعي</label>
    <input type="text" name="university_no" class="form-control" id="university_no">
  </div>
   
   <div class="mb-3">
    <label for="" class="form-label">  إسم المرشد الاكاديمي</label>
    <input type="text" class="form-control" id=""  required="required" >
  </div>

  <div class="form-group">
    <label  for=""> كلمة المرور </label>
       <input  name="password"  type="password" class="form-control" id="exampleInputEmail1" placeholder="">
        </div>                  
  <div class="form-group">
         <label  for=""> أعدد كلمة المرور </label>
              <input  name="retype_password"  type="password" class="form-control" id="exampleInputEmail1" placeholder="">
       </div>

   <br>
  <input style="color: #fff;
    background-color: #054535;
    border-color: #054535;" type="submit" class="col-md-4 btn btn-primary" value="إضافة"></input>
</form>
</div>

      
     </div>
		  <br/>
		 
  </main><!-- End #main -->
  @stop