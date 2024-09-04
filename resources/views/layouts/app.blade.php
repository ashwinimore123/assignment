<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="CRM -  Admin Panel Dashboard">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="sales dashboard, admin dashboard, bootstrap 4 admin template, html admin template, admin panel design, admin panel design, bootstrap 4 dashboard, admin panel template, html dashboard template, bootstrap admin panel, sales dashboard design, best sales dashboards, sales performance dashboard, html5 template, dashboard template">
    <!-- Favicon -->
  <!--   <link rel="icon" href="http://vebsigns.com/images\logo_white.png" alt="logo" class="logo-default logo-home" style="width: 200px;"> -->

    <!-- Title -->
    <title>Assignment</title>

    <!---Fontawesome css-->
    <link href="{{config('app.baseURL')}}/assets/plugins/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!---Ionicons css-->
    <link href="{{config('app.baseURL')}}/assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!---Typicons css-->
    <link href="{{config('app.baseURL')}}/assets/plugins/typicons.font/typicons.css" rel="stylesheet">

    <!---Feather css-->
    <link href="{{config('app.baseURL')}}/assets/plugins/feather/feather.css" rel="stylesheet">

    <!---Falg-icons css-->
    <link href="{{config('app.baseURL')}}/assets/plugins/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">

    <!---Style css-->
    <link href="{{config('app.baseURL')}}/assets/css/style.css" rel="stylesheet">
    <link href="{{config('app.baseURL')}}/assets/css/custom-style.css" rel="stylesheet">
    <link href="{{config('app.baseURL')}}/assets/css/skins.css" rel="stylesheet">
    <link href="{{config('app.baseURL')}}/assets/css/dark-style.css" rel="stylesheet">
    <link href="{{config('app.baseURL')}}/assets/css/custom-dark-style.css" rel="stylesheet">

    <!---Select2 css-->
<link href="{{config('app.baseURL')}}/assets/plugins/select2/css/select2.min.css" rel="stylesheet">
<!--Mutipleselect css-->
<link rel="stylesheet" href="{{config('app.baseURL')}}/assets/plugins/multipleselect/multiple-select.css">
<!---Jquery.mCustomScrollbar css-->
<link href="{{config('app.baseURL')}}/assets/plugins/jquery.mCustomScrollbar/jquery.mCustomScrollbar.css" rel="stylesheet">

    <!---Sidebar css-->
    <link href="{{config('app.baseURL')}}/assets/plugins/sidebar/sidebar.css" rel="stylesheet">

    <!---Sidemenu css-->
    <link href="{{config('app.baseURL')}}/assets/plugins/sidemenu/sidemenu.css" rel="stylesheet">
    <link href="{{asset('assets/css/toaster.css')}}"rel="stylesheet" type="text/css">
    
    <!---Switcher css-->
    <link href="{{config('app.baseURL')}}/assets/switcher/css/switcher.css" rel="stylesheet">
    <link href="{{config('app.baseURL')}}/assets/switcher/demo.css" rel="stylesheet"> </head>
     <script src="{{config('app.baseURL')}}/assets/plugins/jquery/jquery.min.js"></script>
     <script src="{{asset('assets/js/toaster.min.js')}}" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="{{config('app.baseURL')}}/files/assets/css/style.css" media="all">
 

<link href="https://cdn.datatables.net/responsive/2.1.0/css/responsive.dataTables.min.css" rel="stylesheet" media="screen">
<link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet" media="screen">

<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js
"></script>
<script src="https://cdn.datatables.net/responsive/2.1.0/js/dataTables.responsive.min.js"></script>
   <script src="{{config('app.baseURL')}}/assets/js/jquery.dataTables.min.js'" type="text/javascript"></script>
                    
    <!-- <script src="{{config('app.baseURL')}}/assets/js/datatables.init.js" type="text/javascript"></script> -->
     <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
      <script type="text/javascript" src="http://www.gstatic.com/charts/loader.js"></script>

      
    <body>
     <div class="main-wrapper">
<style type="text/css">
    .dataTables_wrapper .dataTables_paginate .paginate_button {
    padding: 0em;
  }
  .dataTables_filter,.dataTables_paginate {
    float: right;
  }



  .dataTables_paginate {
    float: right;
    width: 18%;
    display: flex;
    gap: 10%;
}
  .side-menu .nav-link:hover {
    color: black;
}
     .main-logo {
  
    color: white;
  }
  .main-sidebar.side-menu {
    background: #574476;
  }
  .main-sidebar-body .nav-link {
    color: white;
}
.main-sidebar-body .nav-item.active .nav-link {
    color: white;
}
     body {
    font-size: .9375rem;
    overflow-x: hidden;
    color: #373a3c;
    font-family: "Verdana",sans-serif;
    background-attachment: fixed;
    background-image: none;
}

/*  .dtatablewitdh {
    position: relative;
    left: 9%;
    width: 100%;
}*/
.card-header{
      display: flex;
    align-items: center;
    justify-content: space-between;
}
/*.card{
    left: 24px;
}*/

  .container-fluid {
    width: 100%;
    padding-right: 15px;
    padding-left: 14%;
  }
/*}
.form-inline {
    display: flex;
    flex-flow: row wrap;
    align-items: center;
    margin-top: 15px;
}
.col-sm-6 {
    flex: 0 0 50%;
    max-width: 50%;
    margin-bottom: 20px;
}*/
/*.main-footer {
    background-color: #fff;
    
    padding: 15px;
}*/
.dtatablewitdh{
    background-color: #e1e6f1;
}

/*@media (min-width: 992px)
{
    .main-footer {
     margin-left: 0px; 
}

}
@media (max-width: 576px) {
.main-footer {
    background-color: #fff;
    margin-top: -1px;
    padding-left: 65px;
}
}*/
/*.child ul li{
    border: 1px solid;
    padding: 1%;
}*/
.child ul{
    display: flex !important;
    flex-direction: column;
    gap: 13px;
}
/*.card{
background-color: #f7c57e;
}*/
.table.dataTable th, .table.dataTable td {
     border-left: 0px solid #e1e6f1; 
}
table.dataTable {
     border: 0px solid #e1e6f1; 
}
.breadcrumb {
   /* background-color: #ffc37c;*/
}
</style>
   <!--      -->
@include('layouts.header')
  @yield('content') 
      @include('layouts.footer')
     
    
               <!--  <script src="http://www.gstatic.com/firebasejs/8.3.2/firebase-app.js"></script>           
                <script src="http://www.gstatic.com/firebasejs/8.3.2/firebase-messaging.js"></script>
      -->
<!-- Jquery js-->
     <table class="table table-striped table-bordered dataTable display" cellspacing="0" width="100%">
</table>

    <!-- Bootstrap js-->
    <script src="{{config('app.baseURL')}}/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Ionicons js-->
    <script src="{{config('app.baseURL')}}/assets/plugins/ionicons/ionicons.js"></script>
    
    <!-- Rating js-->
    <script src="{{config('app.baseURL')}}/assets/plugins/rating/jquery.rating-stars.js"></script>
<!-- Accordion-Wizard-Form js-->
<script src="{{config('app.baseURL')}}/assets/plugins/accordion-Wizard-Form/jquery.accordion-wizard.min.js"></script>
<!-- Form-wizard js-->
<script src="http://laravel.spruko.com/dashlead/Leftmenu-Icon-Light/assets/js/form-wizard.js"></script>
    <!-- Flot Chart js-->
<script src="{{config('app.baseURL')}}/assets/plugins/jquery.flot/jquery.flot.js"></script>
<script src="{{config('app.baseURL')}}/assets/plugins/jquery.flot/jquery.flot.resize.js"></script>
<script src="{{config('app.baseURL')}}/assets/js/chart.flot.sampledata.js"></script>
<!-- Chart.Bundle js-->
<script src="{{config('app.baseURL')}}/assets/plugins/chart.js/Chart.bundle.min.js"></script>
<!-- Peity js-->
<script src="{{config('app.baseURL')}}/assets/plugins/peity/jquery.peity.min.js"></script>
<!-- Jquery-Ui js-->
<script src="{{config('app.baseURL')}}/assets/plugins/jquery-ui/ui/widgets/datepicker.js"></script>
<!-- Select2 js-->
<script src="{{config('app.baseURL')}}/assets/plugins/select2/js/select2.min.js"></script>
<!--MutipleSelect js-->
<script src="{{config('app.baseURL')}}/assets/plugins/multipleselect/multiple-select.js"></script>
<script src="{{config('app.baseURL')}}/assets/plugins/multipleselect/multi-select.js"></script>
<!-- Jquery.mCustomScrollbar js-->
<script src="{{config('app.baseURL')}}/assets/plugins/jquery.mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- index -->
<script src="{{config('app.baseURL')}}/assets/js/index.js"></script>
    
    <!-- Perfect-scrollbar js-->
    <script src="{{config('app.baseURL')}}/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <!-- Sidemenu js-->
    <script src="{{config('app.baseURL')}}/assets/plugins/sidemenu/sidemenu.js"></script>
    
    <!-- Sidebar js-->
    <script src="{{config('app.baseURL')}}/assets/plugins/sidebar/sidebar.js"></script>

    <!-- Sticky js-->
    <script src="{{config('app.baseURL')}}/assets/js/sticky.js"></script>
    
    <!-- Switcher js-->
    <script src="{{config('app.baseURL')}}/assets/switcher/js/switcher.js"></script>
    
    <!-- Custom js-->
    <script src="{{config('app.baseURL')}}/assets/js/custom.js"></script>
    <script src="{{asset('assets/js/notify.min.js')}}" type="text/javascript"></script>
              
    <script>
                           @if(Session::has('message'))
                           var type = "{{ Session::get('alert-type', 'info') }}";
                           switch(type){
                            case 'info':
                            toastr.info("{{ Session::get('message') }}");
                            break;

                            case 'warning':
                            toastr.warning("{{ Session::get('message') }}");
                            break;
                            case 'success':
                            toastr.success("{{ Session::get('message') }}");
                            break;
                            case 'error':
                            toastr.error("{{ Session::get('message') }}");
                            break;
                          }
                          @endif
                         
                </script>


</body>
</html>










