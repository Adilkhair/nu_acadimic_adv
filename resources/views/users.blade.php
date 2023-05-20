@extends('layouts.default')
@section('content') 
 
<main id="main">
   <br/>
<?php if(isset($_GET["message"]) && $_GET["message"]!==""){ ?>
<div class="alert alert-success" style="text-align:center"> <?php echo $_GET["message"]; ?>
  </div>  
  <?php } ?>
   <!-- ======= Hero Section ======= -->
   <section id="hero0" class="align-items-center">
   <div class="container"> 
   @if (\Session::has('msg'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('msg') !!}</li>
        </ul>
    </div>
     
@endif 
      <div class="row"><div class="col-md-3" style="display: inline">
        <a href="add_user" style="display: inline"> إضافة مستخدم<!--  +<i class="bx bx-user" style="font-size: 20px"> -->
                     </i></a>
       </div><br> <hr/>
      </div>
       <br/>



            <div class="row">
            <?php foreach ($users as $row) { ?>
              <div class="col-4">
                 
   <div class="card">
      <h5 class="card-header"><i class="bx bx-user" style="font-size: 30px"></i> {{ $row->name }} </h5>
      <div class="card-body">
         <h5 class="card-title">البريد الالكتروني: {{ $row->email }} </h5>
         <p class="card-text"> {{ $row->username }}</p>
         <p class="card-text" style="color: gray">تاريخ الإضافة: {{ $row->created_at }}</p>
         <a href="{{url('delete_user/'.$row->id)}}" style="float: left; padding-right: 10px" onclick="return confirm('تريد حذف النموذج؟')" title="حذف" ><i class="bx bx-trash" style="font-size:20px;  background-color:#EFEFEF "></i></a> 

      </div>
    </div>
               
                   <br/> </div>  
           <?php } ?> 

            
                
          </div>
              </div>
    </div>
   
    
 
   </section><!-- End Hero -->
 
    
   </main><!-- End #main -->
 

@stop