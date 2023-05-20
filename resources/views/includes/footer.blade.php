<footer id="footer">
    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>2023</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
       
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
        Designed by <a href="#">Adil Mobarek</a>
      </div>
    </div>
  </footer><!-- End Footer -->
 
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
 
  <script src="{{ asset('assets/vendor/aos/aos.js')}}"></script>
 <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script> 
   
  <script src="{{ asset('js/jquery-3.5.1.js')}}"></script> 
  <script src="{{ asset('assets/js/jspdf.min.js')}}"></script> 

  <script>
  function html_to_pdf(divName){
alert("ghfgh");
    var doc = new jsPDF();

doc.text(20, 20, 'Hello world!');
doc.text(20, 30, 'This is client-side Javascript to generate a PDF.');

// Add new page
doc.addPage();
doc.text(20, 20, 'Visit CodexWorld.com');

// Save the PDF
doc.save('document.pdf');
  }
    function printDiv(divName) {
      
        var printContents = document.getElementById(divName).innerHTML;
        w=window.open();
        w.document.write('<!DOCTYPE html><html lang="ar" dir="rtl"><head> <meta charset="utf-8"><meta content="width=device-width, initial-scale=1.0" name="viewport"><title>نظام الارشاد الاكاديمي</title> '+
        '<link href="localhost/ershad/public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">'+
         '<link href="localhost/ershad/public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">'+
         '<link href="localhost/ershad/public/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet"> '+
         '<link href="localhost/ershad/public/assets/css/style.css" rel="stylesheet"> '+
          ' </head><body> <div class="container"> <main id="main"><div class="container"><div class="row"><div class="col-sm-12 col-md-9" >');
        w.document.write(printContents);
        w.document.write('</div> </div> </div> </main>  </body></html>');
        w.print();
        w.close();
    }

  
$('input[type="button"]').click(function(e){
  
   $(this).closest('tr').remove();
})
</script>