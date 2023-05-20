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
      <div class="row"><div class="col-md-3" style="display: inline">
        <a href="add_student" style="display: inline">  +<i class="bx bx-user" style="font-size: 20px">
                     </i></a> 
       </div>
      
       
       <form method="post" action="search_std"> @csrf
            <div class="row">
                <div class="col-10">
                   <input type="search" class="form-control rounded" name="search_key" style=" " placeholder="بحث بواسطة إسم الطالب" aria-label="Search"
                   aria-describedby="search-addon" />
                </div>
                <div class="col-2">
                    <button type="submit"  style="margin-right: -22px;">  
                     <span  class="input-group-text border-0" id="search-addon">
                        <i class="bx bx-search"></i> </span>  
                   </button>
                 </div>
              </div><!--row-->
        </form>
       
            
       
       
      </div>
       <br/>
            <div class="row">
            <?php foreach ($students as $row) { ?>
              <div class="col">
                <div class="icon">
                  <a  href="student_forms/<?php echo $row->id ?>"><i class="bx bx-user" style="font-size: 80px">
                     </i> <p style="text-align: right; width: 80%;"><?php echo $row->user->name;?> </p>
                  </a>
                </div>
                </div>
           <?php } ?>

              <!--  <div class="col-sm-4 col-md-2">
                <div class="icon">
                  <a  href="student_forms"><i class="bx bx-user" style="font-size: 80px">
                     </i> <p style="text-align: right; width: 80%;">محمد عبد الحليكم علي</p>
                  </a>
                </div>
             </div>
           <div class="col-sm-4 col-md-2">
                <div class="icon">
                  <a  href="morshid_student_forms.html"><i class="bx bx-user" style="font-size: 80px">
                     </i> <p style="text-align: right; width: 80%;">محمد عبد الحليكم علي</p>
                  </a>
                </div>
             </div>
           <div class="col-sm-4 col-md-2">
                <div class="icon">
                  <a  href="morshid_student_forms.html"><i class="bx bx-user" style="font-size: 80px">
                     </i> <p style="text-align: right; width: 80%;">محمد عبد الحليكم علي</p>
                  </a>
                </div>
             </div>
           <div class="col-sm-4 col-md-2">
                <div class="icon">
                  <a  href="morshid_student_forms.html"><i class="bx bx-user" style="font-size: 80px">
                     </i> <p style="text-align: right; width: 80%;">محمد عبد الحليكم علي</p>
                  </a>
                </div>
             </div>
           <div class="col-sm-4 col-md-2">
                <div class="icon">
                  <a  href="morshid_student_forms.html"><i class="bx bx-user" style="font-size: 80px">
                     </i> <p style="text-align: right; width: 80%;">محمد عبد الحليكم علي</p>
                  </a>
                </div>
             </div>
           <div class="col-sm-4 col-md-2">
                <div class="icon">
                  <a  href="morshid_student_forms.html"><i class="bx bx-user" style="font-size: 80px">
                     </i> <p style="text-align: right; width: 80%;">محمد عبد الحليكم علي</p>
                  </a>
                </div>
             </div> -->
                
          </div>
              </div>
    </div>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    
    
 
   </section><!-- End Hero -->
 
    
   </main><!-- End #main -->
 

@stop