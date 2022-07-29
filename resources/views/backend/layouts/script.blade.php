
  <script src="{{asset('backend/')}}/assets/vendor/libs/jquery/jquery0bfa.js?id=c9eab148c98f81221c99ba6da84fdbe2"></script>
<script src="{{asset('backend/')}}/assets/vendor/libs/popper/popper3939.js?id=3b2f93fa0eb2f0ed310a789319de72fc"></script>
<script src="{{asset('backend/')}}/assets/vendor/js/bootstrap1425.js?id=f4406bcd0acdeffbdcca24c2e1033ae6"></script>
<script src="{{asset('backend/')}}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar7d0f.js?id=2f948c841c6aca9e3a18f6ef2c65b140"></script>
<script src="{{asset('backend/')}}/assets/vendor/js/menu68ea.js?id=3421096250c82e0d3760f641a4d2dba0"></script>
<script src="{{asset('backend/')}}/assets/vendor/libs/apex-charts/apexcharts.js"></script>


<script src="{{asset('backend/')}}/assets/js/main84ce.js?id=0c91cceb5195b308a36d5ac021b16464"></script>
<script src="{{asset('backend/')}}/assets/js/dashboards-analytics.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

  <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>
  $( function() {
    $( ".datepicker" ).datepicker({
			changeMonth: true,
			changeYear: true,
			
			dateFormat: "dd-mm-yy"
		});
  } );
  </script>
@yield('scripts')



<script>
  @if(Session::has('message'))
        var type="{{Session::get('alert-type','info')}}"
        switch(type){
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;
            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;
            case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
        }
  @endif
</script>

<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>








