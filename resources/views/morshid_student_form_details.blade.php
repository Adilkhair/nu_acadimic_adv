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
         <p class="card-text">محمد عمر عثمان</p>
		     <p class="card-text">0123456789</p>
         <p class="card-text">الرقم الجامعي: 012548</p>
         <p class="card-text">محمد عمر عثمان</p>

        </div>
      </div>
    </div>
	
    <div class="col-sm-12 col-md-9">
       <div class="row" style="background-color: #EFEFEF; margin-bottom: 10px; padding: 5px;">
	    <div class="col-9">
		 <b> النماذج المعباة:</b> <b>عرض مشكلة اكاديمية</b>
		</div>
		<div class="col-3">
		 <b><a href="morshid_student_forms.html" style="float: left">رجوع</a></b>
		</div>
	   </div>
	   
	   
	        <div class="row"  >
 		          <table border="1" class="table">
				  <tr><td>  <input class="form-control"  disabled="disabled"  value="الإسم/ عادل مبارك"></td>
				      <td><input class="form-control"    name="std_name" disabled="disabled" id="std_name" value="الرقم الجامعي: عادل مبارك"></td>
					  <td><input class="form-control" type="text" name="std_name" disabled="disabled" id="std_name" value="الفصل الدراسي: عادل مبارك"></td>
				  </tr>
			      <tr><td>التخصص: ..........</td><td>المستوي: ..........</td><td> المعدل التراكمي: ..........</td> </tr>
 				  </table>
			</div>	
            <div class="row" style="margin-bottom: 5px">			
				  <table border="2" class="table" style="width:100%">
				  <tr><td>المشكلة</td><td>اسبابها</td><td>أطراف المشكلة</td><td>االنتيجة</td><td>المؤثر</td> </tr>
				  <tr><td><input class="form-control"  disabled="disabled"  value="المشكلة"></td>
				       <td><input class="form-control" disabled="disabled"  value="المشكلة"></td>
				      <td><input class="form-control "  disabled="disabled"  value="المشكلة"> </td>
					  <td><input class="form-control "  disabled="disabled"  value="المشكلة"></td>
					  <td><input class="form-control "  disabled="disabled"  value="المشكلة"></td>			
				  </tr>
				    <tr><td><input class="form-control"  disabled="disabled"  value="المشكلة"></td>
				       <td><input class="form-control" disabled="disabled"  value="المشكلة"></td>
				      <td><input class="form-control "  disabled="disabled"  value="المشكلة"> </td>
					  <td><input class="form-control "  disabled="disabled"  value="المشكلة"></td>
					  <td><input class="form-control "  disabled="disabled"  value="المشكلة"></td>			
				  </tr>
				   <tr><td><input class="form-control"  disabled="disabled"  value="المشكلة"></td>
				       <td><input class="form-control" disabled="disabled"  value="المشكلة"></td>
				      <td><input class="form-control "  disabled="disabled"  value="المشكلة"> </td>
					  <td><input class="form-control "  disabled="disabled"  value="المشكلة"></td>
					  <td><input class="form-control "  disabled="disabled"  value="المشكلة"></td>			
				  </tr>
				   <tr><td><input class="form-control"  disabled="disabled"  value="المشكلة"></td>
				       <td><input class="form-control" disabled="disabled"  value="المشكلة"></td>
				      <td><input class="form-control "  disabled="disabled"  value="المشكلة"> </td>
					  <td><input class="form-control "  disabled="disabled"  value="المشكلة"></td>
					  <td><input class="form-control "  disabled="disabled"  value="المشكلة"></td>			
				  </tr>

  				  </table>
				  

	  </div>
	   
	    
	     
	  
	   
	
    </div>
     
  </div>
</div>

  </section><!-- End Hero -->

   
  </main><!-- End #main -->
  @stop