<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
   @include('..\includes.head')
</head>
<body>
        @include('..\includes.header')
           @yield('content')
    
       @include('..\includes.footer')
</body>
</html>
