@extends('layouts.default')
@section('content') 



  <!--------------------------- superviser ----------------------------->
 <?php 
  if( auth()->user()->current_team_id == 1){?>
    <section id="hero" class="align-items-center">
      <div class="container"  >
        <div class="row" style="margin-top:100px">
         <h1 style="text-lign: center">المرشد الاكاديمي</h1>
            <div class="col-md-4">  
          <a style="padding: 15px; margin: 10px" href="showtForms" class="btn-get-started scrollto"> <i class="bx bx-file"></i>النماذج  </a>
          </div>       
       
          </div> <div class="col-md-4"> 
          <a style="padding: 15px; margin: 10px" href="students" class="btn-get-started scrollto"> <i class="bx bx-lock-alt"></i>  الطلاب</a>
          </div>   
       <!--    <div class="row" style="margin-top:10px">
          <div class="col-md-4">
          <a style="padding: 15px; margin: 10px" href="students" class="btn-get-started scrollto"> تقارير عامة</a>
          </div> <div class="col-md-4">  
          <a style="padding: 15px; margin: 10px" href="students" class="btn-get-started scrollto"> <i class="bx bx-report"></i>تقارير المشرف    </a>
          </div> <div class="col-md-4"> 
          <a style="padding: 15px; margin: 10px" href="students" class="btn-get-started scrollto"> <i class="bx bx-report"></i> تقارير المسجل</a>
          </div>
          </div> -->
          </div>
        </div>
      </div>
    </section><!-- End Hero -->

  <!--------------------------- student ----------------------------->
  <?php } else  if( auth()->user()->current_team_id == 4) { /**student */ ?> 
<section id="hero" class="align-items-center">
    <div class="container"  >
    <h1 style="text-lign: center">الطالب </h1>
    
      <div class="col-md-4 offset-8" style="margin:auto">  
         <a style="padding: 15px; margin: 10px" href="showtForms" class="btn-get-started scrollto"> <i class="bx bx-file"></i>النماذج  </a>
        </div>  
        <div class="col-md-4 offset-8" style="margin:auto">  
         <a style="padding: 15px; margin: 10px" href="getFormsTemplate/{{auth()->user()->id}}" class="btn-get-started scrollto"> <i class="bx bx-file"></i>إضافة نموذج  </a>
        </div>  
 
    </div>
  </section>

  <!--------------------------- register ----------------------------->
<?php  } else  if( auth()->user()->current_team_id == 5){    /** register*/ ?>
  
<section id="hero" class="align-items-center">
    <div class="container"  >
    <h1 style="text-lign: center">المسجل</h1>
      <div class="col-md-4 offset-8" style="margin:auto">  
         <a style="padding: 15px; margin: 10px" href="showtForms" class="btn-get-started scrollto"> <i class="bx bx-file"></i>النماذج  </a>
        </div>  
    
    </div>
  </section>
  <!--------------------------- dept ----------------------------->
  <?php  } else  if( auth()->user()->current_team_id == 2){    /** dept*/ ?>
  
  <section id="hero" class="align-items-center">
      <div class="container"  >
    <h1 style="text-lign: center">رئيس القسم </h1>
      
        <div class="col-md-4 offset-8" style="margin:auto">  
           <a style="padding: 15px; margin: 10px" href="showtForms" class="btn-get-started scrollto"> <i class="bx bx-file"></i>النماذج  </a>
          </div>  
      
      </div>
    </section>

  <!--------------------------- dean ----------------------------->
    <?php  } else  if( auth()->user()->current_team_id == 3){    /** dean*/ ?>
  <section id="hero" class="align-items-center">
      <div class="container"  >
  <h1 style="text-lign: center">عميد الكلية</h1>
      
        <div class="col-md-4 offset-8" style="margin:auto">  
           <a style="padding: 15px; margin: 10px" href="showtForms" class="btn-get-started scrollto"> <i class="bx bx-file"></i>النماذج  </a>
          </div>  
      
      </div>
    </section>
   

    <?php  } else  if( auth()->user()->current_team_id == 6){    /** مشرف اكاد*/ ?>
  <section id="hero" class="align-items-center">
      <div class="container"  >
      <div class="col-md-4">
          <a style="padding: 15px; margin: 10px" href="students" class="btn-get-started scrollto"> <i class="bx bx-user"></i>ملفات الطلاب</a>
          </div> <div class="col-md-4">  
          <a style="padding: 15px; margin: 10px" href="showtForms" class="btn-get-started scrollto"> <i class="bx bx-file"></i>النماذج  </a>
          </div> <div class="col-md-4"> 
          <a style="padding: 15px; margin: 10px" href="users" class="btn-get-started scrollto"> <i class="bx bx-lock-alt"></i> المستخدمين</a>
          </div>          
      
      </div>
    </section>
    <?php  } ?>
@stop

 