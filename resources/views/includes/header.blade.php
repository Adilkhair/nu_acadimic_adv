<nav class="navbar navbar-expand-sm navbar-dark bg-dark" style="margin-bottom: 20px;">
  <div class="container-fluid">
  <a class="navbar-brand" href="{{ route('home')}}" style="color: #fff">
      <img src="{{ asset('assets/img/logo.jpg')}}" alt="" width="80px" height="60px" class="d-inline-block align-text-top">
      <!--<h3 style="padding: 5px"> نظام الإرشاد الاكاديمي</h3>-->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('home')}}">الرئيسية</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('students')}}">الطلاب</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('showtForms')}}" >النمازج</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" style="color: #fff" href="{{url('user/profile')}}">مرحبا, <?php   echo Auth::user()->name; ?></a>
        </li>
        <li class="nav-item">
        <form method="POST"  action="{{ route('logout') }}">
           @csrf
          <input type="submit" value="خروج">
         </form>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="بحث">
        <button class="btn btn-primary" type="button">بحث</button>
      </form>
    </div>
  </div>
</nav>

