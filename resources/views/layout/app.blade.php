<html lang="en">

<head>
   <!-- Required meta tags-->
   <meta charset="UTF-8">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="au theme template">
   <meta name="author" content="Hau Nguyen">
   <meta name="keywords" content="au theme template">

   <!-- Title Page-->
   <title>Dashboard</title>
   
   <link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css')}}">
   
   <!-- Fontfaces CSS-->
   <link href="{{asset('/css/font-face.css')}}" rel="stylesheet" media="all">
   <link href="{{asset('/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
   <link href="{{asset('/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
   <link href="{{asset('/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

   <!-- Bootstrap CSS-->
   <link href="{{asset('/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

   <!-- Vendor CSS-->
   <link href="{{asset('/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
   <link href="{{asset('/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
   <link href="{{asset('/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
   <link href="{{asset('/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
   <link href="{{asset('/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
   <link href="{{asset('/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
   <link href="{{asset('/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

   <!-- Main CSS-->
   <link href="{{asset('/css/theme.css')}}" rel="stylesheet" media="all">

</head>
<body class="animsition">
    
  
  @include('includes.header')
  @yield('content')

      
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- Jquery JS-->
  <script src="{{asset('/vendor/jquery-3.2.1.min.js')}}"></script>
  <!-- Bootstrap JS-->
  <script src="{{asset('/vendor/bootstrap-4.1/popper.min.js')}}"></script>
  <script src="{{asset('/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
  <!-- Vendor JS       -->
  <script src="{{asset('/vendor/slick/slick.min.js')}}">
  </script>
  <script src="{{asset('/vendor/wow/wow.min.js')}}"></script>
  <script src="{{asset('/vendor/animsition/animsition.min.js')}}"></script>
  <script src="{{asset('/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
  </script>
  <script src="{{asset('/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('/vendor/counter-up/jquery.counterup.min.js')}}">
  </script>
  <script src="{{asset('/vendor/circle-progress/circle-progress.min.js')}}"></script>
  <script src="{{asset('/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
  <script src="{{asset('/vendor/chartjs/Chart.bundle.min.js')}}"></script>
  <script src="{{asset('/vendor/select2/select2.min.js')}}">
  </script>

  <!-- Main JS-->
  <script src="{{asset("/js/main.js")}}"></script>
  <!--JQuery-->
  <script src="{{asset('https://code.jquery.com/jquery-3.5.1.js')}}" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <!--Bootstrap JS-->
  <script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js')}}"></script>

  <!--JQuery AJAX for create-->
  
</body>
</html>

{{-- <script>
    $(document).ready(function(){

          $('#createStudent').on('submit',function(e){
              e.preventDefault();
              $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
              });

              
              $.ajax({
                    method: "POST",
                    url   : "{{ route('student.store')}}",
                    data  : $('#createStudent').serialize(),
                    dataType: 'json',
                    success: function(data){
                        console.log(data);
                        $('#createStudent')[0].reset();
                        //$('#succ_mess').show();
                        $('#succ_mess').html(data.success).delay(10000).fadeOut();
                        $('#createStudent').ajax.reload();
                    },
                    error: function (request, status, error){
                        json = $.parseJSON(request.responseText);
                        $.each(json.errors, function(key, value){
                            $('#err_mess').show();
                            $('#err_mess').append(value).delay(10000).fadeOut();
                            $('#createStudent').ajax.reload();
                        });
                    }
                });
        });
    });

</script> --}}