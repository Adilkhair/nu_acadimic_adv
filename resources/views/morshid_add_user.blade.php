@extends('layouts.default')
@section('content') 
   <!-- End Header -->

  <main id="main">
   
   <div class="container">  
     <div class="row">
	      <div class="col-md-12" style="display: inline; text-align: center">
		   <h2  style="display: inline">  +<i class="bx bx-user" style="font-size: 40px">
					          </i>إضافة مستخدم جديد</h2> 
						 
		  </div>
		  
		  
<div class="col-md-6"  style="margin:auto">
@if (\Session::has('err'))
    <div class="alert alert-danger">
        <ul>
            <li>{!! \Session::get('err') !!}</li>
        </ul>
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

 


<form method="POST" action="create_user">
@if (\Session::has('msg'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('msg') !!}</li>
        </ul>
    </div>
@endif

@csrf

  <div class="mb-3">
    <label for="name" class="form-label">الإسم</label>
    <input type="text" name="name" id="name" class="form-control" >
    <div id="" class="form-text">الرجاء إدخال الإسم كاملا</div>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">  البريد الالكتروني</label>
    <input type="text" name="email" class="form-control" id="email">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">  الصلاحية</label>
    <select id="team_id" name="team_id" class="form-control" aria-describedby="levelHelpBlock" required="required">
        <option value="1">مرشد أكاديمي</option>
        <option value="2">رئيس قسم</option>
        <option value="3">عميد الكلية</option>
        <option value="5">مسجل</option>
      </select> 
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