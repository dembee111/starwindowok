<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard 2</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('assets/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('assets/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('assets/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/vendor/vector-map/jqvmap.min.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet" media="all">
    @yield('styles')
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!--Header for Mobile -->

        @include('back.layouts.partials.mobileheader')
        <!-- MENU SIDEBAR-->
        @include('back.layouts.partials.sidebar')
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
           @include('back.layouts.partials.navbar')


         
            <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <span class="au-breadcrumb-span">Замчлал:</span>
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <a href="#">Эхлэл</a>
                                            </li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item">Эхлэл</li>
                                        </ul>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->
         
            @if(Session::has('not_admin'))
              <div class="container-fluid">
                  <div class="alert alert-danger" role="alert">                     
                                   
                    {{ session('not_admin') }}
                                        
                    </div>
              </div>
                
            @endif
            @if(Request::is('dashboard'))
                 
                 @include('back.layouts.partials.static')

            @endif
             <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                       
                        @yield('content')
                    </div>
                </div>
             </div>

            <section class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Star Window 2019 <a href="https://starwindow.mn">он</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END PAGE CONTAINER-->
        </div>
        <!-- modal static -->
            <div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
             data-backdrop="static">
                <div class="modal-dialog modal-sm" role="document">
                  <form action="" id="deleteForm" method="post">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticModalLabel">Анхааруулага</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            @csrf
                            @method('DELETE')
                            <p>
                                Та энэ хэрэглэгчийг устгахдаа итгэлтэй байна уу? хэрэв тийм бол батлах товчин дээр дарна уу!
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Болих</button>
                            <button type="submit" class="btn btn-primary" data-dismiss="modal" onclick="formSubmit()">Батлах</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        <!-- end modal static -->

        <!-- modal static -->
            <div class="modal fade" id="staticModalPost" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
             data-backdrop="static">
                <div class="modal-dialog modal-sm" role="document">
                  <form action="" id="deleteFormPost" method="post">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticModalLabel">Анхааруулага</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            @csrf
                            @method('DELETE')
                            <p>
                                Та энэхүү мэдээллийг устгахдаа итгэлтэй байна уу? хэрэв тийм бол батлах товчин дээр дарна уу!
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Болих</button>
                            <button type="submit" class="btn btn-primary" data-dismiss="modal" onclick="formSubmitPost()">Батлах</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        <!-- end modal static -->

        <!-- modal static -->
            <div class="modal fade" id="staticConfirmOrder" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
             data-backdrop="static">
                <div class="modal-dialog modal-lg" role="document">
                  <form action="" id="confirmFormOrder" method="post" class="needs-validation" novalidate>
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticModalLabel">Ажил гүйцэтгэсэн тэмдэглэл</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            @csrf
                            @method('PATCH')
                            <p>
                                Энэхүү ажлийг хэрэглэгчийн захиалсаны дагуу гүйцэтгэсэн бол тайлбар хэсэгт
                                хэн, хэрхэн, хэр хугацаанд гүйцэтгсэнийг оруулан ёстой
                            </p>
                            <br>
                            <label for="textarea-input" class=" form-control-label">Бичвэр</label>
                            <input type="integer" class="form-control" name="status" hidden value="2" />
                            <textarea name="comment" id="textarea-input" rows="9" placeholder="Гүйцэтгэсэн тэмдэглэл..." class="form-control" required></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Болих</button>
                            <button type="submit" class="btn btn-primary" data-dismiss="modal" onclick="formSubmitOrder()">Батлах</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        <!-- end modal static -->


        <!-- modal static -->
            <div class="modal fade" id="staticCancelOrder" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
             data-backdrop="static">
                <div class="modal-dialog modal-sm" role="document">
                  <form action="" id="cancelFormOrder" method="post">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticModalLabel">Захиалага Цуцлах</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            @csrf
                            @method('PUT')
                            <p>
                                Та энэхүү мэдээллийг Цуцлахдаа итгэлтэй байна уу? хэрэв тийм бол батлах товчин дээр дарна уу!
                            </p>
                            <input type="number" class="form-control" name="status" value="0" hidden>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Болих</button>
                            <button type="submit" class="btn btn-primary" data-dismiss="modal" onclick="formCancelOrder()">Батлах</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        <!-- end modal static -->

         <!-- modal static -->
            <div class="modal fade" id="staticDeleteOrder" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
             data-backdrop="static">
                <div class="modal-dialog modal-sm" role="document">
                  <form action="" id="deleteFormOrder" method="post">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticModalLabel">Захиалага устгах</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            @csrf
                            @method('DELETE')
                            <p>
                                Та энэхүү мэдээллийг устгахдаа итгэлтэй байна уу? хэрэв тийм бол батлах товчин дээр дарна уу!
                            </p>
                            <input type="number" class="form-control" name="status" value="0" hidden>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Болих</button>
                            <button type="submit" class="btn btn-primary" data-dismiss="modal" onclick="formDeleteOrder()">Батлах</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        <!-- end modal static -->


    </div>

    <!-- Jquery JS-->

    <script src="{{ asset('assets/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('assets/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('assets/vendor/slick/slick.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/select2/select2.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/vector-map/jquery.vmap.js') }}"></script>
    <script src="{{ asset('assets/vendor/vector-map/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/vector-map/jquery.vmap.sampledata.js') }}"></script>
    <script src="{{ asset('assets/vendor/vector-map/jquery.vmap.world.js') }}"></script>
    <!-- Main JS-->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    
    @yield('scripts')

    <script>

    
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

<script type="text/javascript">

     function deleteData(id)
     {
         var id = id;
         var url = '{{ route("users.destroy", ":id") }}';
         url = url.replace(':id', id);
         $("#deleteForm").attr('action', url);
     }

     function formSubmit()
     {
         $("#deleteForm").submit();
     }


     function deletePost(id)
     {
         var id = id;
         var url = '{{ route("posts.destroy", ":id") }}';
         url = url.replace(':id', id);
         $("#deleteFormPost").attr('action', url);
     }

     function formSubmitPost()
     {
         $("#deleteFormPost").submit();
     }



     /*---------- захиалгын хэсэг -----------*/
     function confirmOrder(id)
     {
         var id = id;
         var url = '{{ route("order.update", ":id") }}';
         url = url.replace(':id', id);
         $("#confirmFormOrder").attr('action', url);
     }

     function formSubmitOrder()
     {
         $("#confirmFormOrder").submit();
     }


     /*---------- захиалгын цуцлах -----------*/

     function cancelOrder(id)
     {
         var id = id;
         var url = '{{ route("order.cancel", ":id") }}';
         url = url.replace(':id', id);
         $("#cancelFormOrder").attr('action', url);
     }

     function formCancelOrder()
     {
         $("#cancelFormOrder").submit();
     }


      /*---------- захиалгын усгах -----------*/

     function deleteOrder(id)
     {
         var id = id;
         var url = '{{ route("order.destroy", ":id") }}';
         url = url.replace(':id', id);
         $("#deleteFormOrder").attr('action', url);
     }

     function formDeleteOrder()
     {
         $("#deleteFormOrder").submit();
     }
 $(document).ready(function(){
     $('div.alert').delay(5000).slideUp(300);
 });


   
                
  </script>
</body>

</html>
<!-- end document-->