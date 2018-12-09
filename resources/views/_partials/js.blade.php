<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset('js/jquery/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap popper Core JavaScript -->
@stack('start_js')
   <!-- Bootstrap tether Core JavaScript -->
   <script src="{{asset('js/popper.min.js')}}"></script>
   <script src="{{asset('js/bootstrap.min.js')}}"></script>
   <!-- slimscrollbar scrollbar JavaScript -->
   <script src="{{asset('js/perfect-scrollbar.jquery.min.js')}}"></script>
   <!--Wave Effects -->
   <script src="{{asset('js/waves.js')}}"></script>
   <!--Menu sidebar -->
   <script src="{{asset('js/sidebarmenu.js')}}"></script>
   <!--stickey kit -->
   <script src="{{asset('js/sticky-kit.min.js')}}"></script>
   <script src="{{asset('js/jquery.sparkline.min.js')}}"></script>
   <!--Custom JavaScript -->
   <script src="{{asset('js/custom.min.js')}}"></script>
   <!-- jQuery peity -->
   <script src="{{asset('js/jquery.peity.min.js')}}"></script>
   <script src="{{asset('js/jquery.peity.init.js')}}"></script>
   <script type="text/javascript">
   $(document).ready(function(){
     $("input:radio[name=langs]").click(function() {
       let lang = $(this).val();
       //console.log(lang);
       $.ajax({
            url:'locale/{lang}',
            type:'GET',
            data:{lang:lang},
            success:function(data){
              location.reload();
            }
       });
     });
     })
   </script>
@stack('end_js')
