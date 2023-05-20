<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" >

    <!-- Font Awesome -->
 
    <link href="assets/css/style.css" rel="stylesheet">

    <style>
      
  
        body {
          background: url(assets/img/bg.png) no-repeat center center fixed;
       -webkit-background-size: cover;
      
     /*  height: 100vh */;
  }
  
        #intro {
         
        }
  
        /* Height for devices larger than 576px */
        @media (min-width: 992px) {
          #intro {
            margin-top: -58.59px;
          }
        }
  
        .navbar .nav-link {
          color: #fff !important;
        }

      </style>
</head>
     
<body>
  

<div id="intro" class="bg-image shadow-2-strong"> 
      <div class="mask d-flex align-items-center h-100"  >
        <div class="container">  <br/><br/><br/>
          <div class="row justify-content-center">
            
            <divتسجيل الدخول class="col-xl-5 col-md-8">
             
              <form class="bg-white rounded shadow-5-strong p-5" action="home" >
                 <h2   font-family= "JF_Flat_Regular">تسجيل الدخول</h2>
                 <p>الرجاء إدخال البريد الالكتروني وكلمة المرور</p>
                <!-- Email input -->
                <div class="mb-4">
                  <input type="email" id="" class="form-control" required="required" placeholder="البريد الالكتروني" />
                  <label class="form-label"  required="required"  for="form1Example1"> البريد الالكتروني</label>
                </div>

                <!-- Password input -->
                <div class="mb-4">
                  <input type="password" id="form1Example2" class="form-control"  placeholder="كلمة المرور" />
                  <label class="form-label" for="form1Example2" >كلمة المرور</label>
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                  <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                      <input class="form-check-input" style="background-color: #054535; "  type="checkbox" value="" id="form1Example3"   />
                      <label class="form-check-label" for="form1Example3">
                        تزكرني
                      </label>
                    </div>
                  </div>

                  <div class="col text-center">
                    <!-- Simple link -->
                    <a href="#!" style="color: #054535; ">نسيت كلمة المرور</a>
                  </div>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn  btn-block" style="background-color: #054535; color:blanchedalmond">تسجيل الدخول</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

 