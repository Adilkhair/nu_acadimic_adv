<body>
  
<nav class="navbar navbar-light "  style="background-color:#054535; " >
  <div class="container">
     

    <a class="navbar-brand" href="{{ route('home')}}" style="color: #fff">
      <img src="{{ asset('assets/img/logo.jpg')}}" alt="" width="80px" height="60px" class="d-inline-block align-text-top">
      <h3 style="padding: 5px"> نظام الإرشاد الاكاديمي</h3>
    </a>
   
    
    <div class="navbar" id="navbarNav">
      <ul class="navbar-nav">
     

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" style="color: #fff" href="{{url('user/profile')}}">مرحبا, <?php   echo Auth::user()->name; ?></a>
        </li>
        <li class="nav-item">
        <!--   <a style="color: #fff" href="{{ route('logout') }}">
          <i style="font-size: 30px; color: #fff" class="bx bx-log-out" ></i> خروج
          </a> -->
        <form method="POST"  action="{{ route('logout') }}">
                                @csrf
                                <input type="submit" value="خروج">
      
                              </form>
        </li>
      
      </ul>
    </div>
  </div>
</nav>
  