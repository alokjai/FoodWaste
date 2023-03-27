<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    @yield('title')
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.5/css/perfect-scrollbar.min.css" integrity="sha512-ygIxOy3hmN2fzGeNqys7ymuBgwSCet0LVfqQbWY10AszPMn2rB9JY0eoG0m1pySicu+nvORrBmhHVSt7+GI9VA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />


  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.8.4/tinymce.min.js"></script>

  <style>
    * {
      font-weight: 600;
    }

    .card label {
      font-weight: 500;
      font-size: 0.8571em;
      margin-bottom: 5px;
      color: #2c2020;
    }
  </style>

</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar sidebar-wrapper" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href='#' class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/img/logo-small.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href='{{ route("dashboard")}}' class="navbar-brand logo-normal">
          Food Waste
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">

          <li class="{{ 'dashboard' == request()->path()? 'active' : ''}}">
            <a href='{{ route("dashboard")}}'>
              <i class="fa fa-bank"></i>

              <p>Dashboard</p>
            </a>
          </li>

         
         

         

         






        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-sm navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" title="foropen" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href='{{ route("dashboard")}}'>Food Waste Admin Panel</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">

            <!-- <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form> -->
            <ul class="navbar-nav">
              <li class="nav-item dropdown mr-">
                <a class="logou_btn btn btn-danger rounded-pill " href="{{ route('admin.logout') }}" rel="tooltip" data-placement="bottom" title="Admn Logout">
                  <i class="fa fa-power-off"></i> Logout
                </a>

              </li>


            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->






      <div class="content" style="min-height: 78vh;">

        @yield('content')

      </div>

      
      
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.5/perfect-scrollbar.min.js" integrity="sha512-X41/A5OSxoi5uqtS6Krhqz8QyyD8E/ZbN7B4IaBSgqPLRbWVuXJXr9UwOujstj71SoVxh5vxgy7kmtd17xrJRw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- General JS Scripts -->
  <!-- <script src="https://csc.anujdwivedi.in/assets/js/jquery.min.js" type="text/javascript"></script> -->
  
  <script src="https://csc.anujdwivedi.in/assets/js/popper.js" type="text/javascript"></script>
  <script src="https://csc.anujdwivedi.in/assets/js/tooltip.js" type="text/javascript"></script>
  <script src="https://csc.anujdwivedi.in/assets/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="https://csc.anujdwivedi.in/assets/nicescroll/jquery.nicescroll.min.js" type="text/javascript"></script>
  <!-- <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script> -->
    <script src="https://csc.anujdwivedi.in/assets/js/moment.min.js" type="text/javascript"></script>
    
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>



  <!--  Google Maps Plugin    -->
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project!  -->
  <!-- <script src="../assets/demo/demo.js"></script> -->



  <!-- @if(session('status'))
                <div class="alert alert-success" role="alert">
                    {{session('status')}}
                </div>
  @endif -->

  <script>
    // swal({
    //   title: '{{session("status")}}',
    //   icon:'success',
    //   button: "OK",
    // });
  </script>

  <script>
    $(document).ready(function() {
      // $('#gamelist').DataTable();
      var t = $('#gamelist').DataTable({
        columnDefs: [{
          searchable: false,
          orderable: false,
          targets: 0,
        }, ],
        // order: [[1, 'asc']],
      });

      t.on('order.dt search.dt', function() {
        let i = 1;

        t.cells(null, 0).every(function(cell) {
          this.data(i++);
        });
      }).draw();
    });
  </script>

  <!-- <script type="text/javascript">
        $(function() {

            $(document).on('click', '.delete_btn', function() {
                var delete_link = $(this).data('delete_link');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = delete_link;
                    }
                })


            }); -->

  <!-- //     $(document).on('click', '.status_btn', function() {
        //         var status_link = $(this).data('status_link');
        //         Swal.fire({
        //             title: 'Are you sure?',
        //             text: "This Status will change!",
        //             icon: 'warning',
        //             showCancelButton: true,
        //             confirmButtonColor: '#3085d6',
        //             cancelButtonColor: '#d33',
        //             confirmButtonText: 'Yes, change it!'
        //         }).then((result) => {
        //             if (result.isConfirmed) {
        //                 var status = $(this).data('next_click');
        //                 $.ajax({
        //                     url: status_link,
        //                     type: 'GET',
        //                     data: {
        //                         status: status
        //                     },
        //                     success: function(res) {
        //                         $('#baseTable').DataTable().clear().draw();
        //                     }
        //                 });
        //             }
        //         })
        //     });
     // }); -->



  <script>
    tinymce.init({
      selector: '.editor',
      height: 400,
      menubar: false,
      plugins: [
        'advlist autolink lists link image charmap print preview anchor textcolor',
        'searchreplace visualblocks code fullscreen',
        'insertdatetime media table contextmenu paste code help wordcount'
      ],
      mobile: {
        theme: 'mobile'
      },
      toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
      content_css: [
        '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
        '//www.tiny.cloud/css/codepen.min.css'
      ],
    });
  </script>

 

  @yield('scripts')
</body>

</html>