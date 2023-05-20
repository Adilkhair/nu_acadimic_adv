

     <!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>نظام الارشاد الاكاديمي</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" >

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />

    <link href="assets/css/style.css" rel="stylesheet">

    <style>
      
  
        body {
          background: url(img/bg.jpg) no-repeat center center fixed;
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

<nav class="navbar navbar-light "  style="background-color:#054535;     opacity: 0.5; " >
  <div class="container" style="width:40%">
     

  <a class="navbar-brand" href="{{ route('home')}}" style="color: #fff">
      <img src="{{ asset('assets/img/logo.png')}}" alt="" width="100px" height="100px" class="d-inline-block align-text-top">
    </a>
  
    <a class="nav-item"  target="_blank"   href=" {{ url('gide')}} " style="color: #fff">
      لائحة الدراسة 
    </a>

    <a class="nav-item nav-link" target="_blank"  href=" {{ url('daleel')}} " style="color: #fff">
      دليل الإرشاد الأكاديمي
    </a>
   
  </div>
</nav>

<marquee width = "100%" style="color: #fff"  direction="right">
<p>   <img src="assets/img/logo.PNG"   style="margin-right: 50px"    width="30px" height="30px" >    النظام الإلكتروني للارشاد الأكاديمي     
  <img src="assets/img/logo.PNG" 
   style="margin-right: 50px"   width="30px" height="30px" >      دليل للارشاد الأكاديمي     
    <img src="assets/img/logo.PNG" style="margin-right: 50px"  width="30px" height="30px" >
    لائحة الدراسة</p>   
</marquee>  
<!--   <marquee  direction="right">
  <img src="http://localhost/shaqra_laravel_multi_users/public/assets/img/logo.png"  width="100px" height="100px" >
</marquee>   -->
    
  <br/><br/><br/><br/><br/>
    <!-- Background image -->
    <div id="intro" class="bg-image shadow-2-strong">
      <div class="mask d-flex align-items-center h-100"  >
        <div class="container">   
          <div class="row justify-content-center">
          <h1  style="text-align: center; color: white; padding-bottom: 30px" >الإرشاد الأكاديمي  Academic Advising</h1> 
            <div class="col-xl-5 col-md-8">
      
              <form class="bg-white rounded shadow-5-strong p-5" method="POST" action="{{ route('login') }}" >
              @csrf
              @if ($errors->any())
                <div class="">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li style="color:red">{{ $error }}</li>
                      @endforeach
                        </ul>
                    </div>
                  @endif
                <h2   font-family= "JF_Flat_Regular">تسجيل الدخول</h2>
                 <p>الرجاء إدخال البريد الالكتروني وكلمة المرور</p>
                <!-- Email input -->
                <div class="mb-4">
                  <input type="email" id="email" name="email" :value="old('email')" class="form-control" required autofocus placeholder="البريد الالكتروني" />
                  
                 <!--  <label class="form-label"  required="required"  for="form1Example1"> البريد الالكتروني</label>
               -->  </div>

                <!-- Password input -->
                <div class="mb-4">
                  <input type="password" id="password" class="form-control" name="password" required autocomplete="current-password"  placeholder="كلمة المرور" />
                
                 <!--  <label class="form-label" for="password" >كلمة المرور</label> -->
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
                    <a href=" {{ url('forgot-password')}}" style="color: #054535; ">نسيت كلمة المرور</a>
                  </div>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn  btn-block" style="background-color: #054535; color:blanchedalmond">تسجيل الدخول</button>
              </form>         
            </div>
          </div>
        </div>
      </div>
      <br/><br/><br/><p style="text-align: center; color:  #fff;">designed by Academic Advising</p>

    </div>
    <!-- Background image -->
   <!--Main Navigation-->
 
     
</body>
</html>