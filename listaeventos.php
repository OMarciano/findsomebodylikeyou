<!DOCTYPE html>
<html>



<head>
    <meta charset="UTF-8">
    <title>Eventos</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="shortcut icon" href="img/favicon.ico"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link type="text/css" href="css/app.css" rel="stylesheet"/>
    <!-- end of global css -->
    <!--page level css -->
    <link rel="stylesheet" type="text/css" href="css/custom.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/core.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/custom_css/circle_sliders.css">
     <link rel="stylesheet" type="text/css" href="vendors/datatables/css/dataTables.bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="vendors/datatables/css/buttons.bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="vendors/datatables/css/colReorder.bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="vendors/datatables/css/dataTables.bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="vendors/datatables/css/rowReorder.bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="vendors/datatables/css/buttons.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="vendors/datatables/css/scroller.bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/custom.css">
    <!--end of page level css-->

</head>

<body class="skin-default">
<div class="preloader">
    <div class="loader_img"><img src="img/loader.gif" alt="loading..." height="64" width="64"></div>
</div>
<!-- header logo: style can be found in header-->
<header class="header">
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="index.html">
            <!-- Add the class icon to your logo image or logo icon to add the margining -->
            <img src="img/logo.png" width="100" height="35" />
        </a>
        <!-- Header Navbar: style can be found in header-->
        <!-- Sidebar toggle button-->
        <!-- Sidebar toggle button-->
        <div>
            
        </div>
   
    </nav>
</header>
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <!-- sidebar: style can be found in sidebar-->
        <section class="sidebar">
            <div id="menu" role="navigation">
                <div class="nav_profile">
                    <div class="media profile-left">
                        <a class="pull-left profile-thumb" href="#">
                            <img src="img/authors/man.png" class="img-circle" alt="User Image">
                        </a>
                        <div class="content-profile">
                            <h4 class="media-heading">
                                Marciano
                            </h4>
                            <ul class="icon-list">
                                <li>
                                    <a href="users.html">
                                        <i class="fa fa-fw ti-user"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="lockscreen.html">
                                        <i class="fa fa-fw ti-lock"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="edit_user.html">
                                        <i class="fa fa-fw ti-settings"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="login.html">
                                        <i class="fa fa-fw ti-shift-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                         <ul class="navigation">
                    <li class="active" id="active">
                        <a href="index-2.html">
                            <i class="menu-icon ti-desktop"></i>
                            <span class="mm-text ">Home</span>
                        </a>
                    </li>
                    <li>
                    </li>
                    <li class="menu-dropdown">
                        <a href="javascript:void(0)">
                            <i class="menu-icon ti-check-box"></i>
                            <span>Adicionar</span>
                            
                        </a>

                    </li>
                    <li class="menu-dropdown">
                        <a href="#">
                            <i class="menu-icon ti-desktop"></i>
                            <span>
                                    Eventos
                                </span>
                            <span class="fa arrow"></span>
                        </a>

                    </li>
             
                    <li class="menu-dropdown">
                        <a href="#">
                            <i class="menu-icon ti-widget"></i>
                            <span>API</span>
                            <span class="fa arrow"></span>
                        </a>
                 
                    </li>
        
                    <li class="menu-dropdown">
               
                    </li>
              
             
                
                </ul>
                <!-- / .navigation -->
            </div>
            <!-- menu -->
        </section>
        <!-- /.sidebar -->
    </aside>
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--section starts-->
            <h1>
                Lista
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index-2.html">
                        <i class="fa fa-fw ti-home"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#">
                    Eventos
                    </a>
                </li>
                <li class="active">
                    Lista de eventos
                </li>
            </ol>
        </section>
        <section class="content">
            <!--main content-->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="ti-pie-chart"></i> Lista de eventos
                            </h3>
                            <span class="pull-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removepanel clickable"></i>
                                </span>
                        </div>
                        <div class="panel-body">
                            <!--knob-->
                            <div class="visible-ie8">
                                <div class="col-md-12">
                                    <div class="alert alert-success alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert"
                                                aria-hidden="true">&times;</button>
                                        O seu evento atende os criterios minimos dos investidores abaixo:
                                    </div>
                                </div>
                            </div>
                            <!-- PALESTRANTES -->

                    <div class="row">
                <div class="col-lg-12">
                    <div class="panel filterable">
                        <div class="panel-heading clearfix  ">
                            <div class="panel-title pull-left">
                                <i class="ti-export"></i> <b>Want to export data?</b>
                            </div>
                            <div class="tools pull-right"></div>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table1">
                                    <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>User email</th>
                                        <th>
                                            Account Type
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Demetrius</td>
                                        <td>Cole</td>
                                        <td>Demetrius.Cole@yahoo.com</td>
                                        <td>Credit Card Account</td>
                                    </tr>
                                    <tr>
                                        <td>Sydnee</td>
                                        <td>Beahan</td>
                                        <td>Sydnee_Beahan41@gmail.com</td>
                                        <td>Home Loan Account</td>
                                    </tr>
                                    <tr>
                                        <td>Susanna</td>
                                        <td>Skiles</td>
                                        <td>Susanna.Skiles@gmail.com</td>
                                        <td>Investment Account</td>
                                    </tr>
                                    <tr>
                                        <td>Dean</td>
                                        <td>Okuneva</td>
                                        <td>Dean.Okuneva@hotmail.com</td>
                                        <td>Savings Account</td>
                                    </tr>
                                    <tr>
                                        <td>Jameson</td>
                                        <td>Hane</td>
                                        <td>Jameson.Hane75@yahoo.com</td>
                                        <td>Investment Account</td>
                                    </tr>
                                    <tr>
                                        <td>Jamar</td>
                                        <td>Mohr</td>
                                        <td>Jamar80@hotmail.com</td>
                                        <td>Savings Account</td>
                                    </tr>
                                    <tr>
                                        <td>Jazlyn</td>
                                        <td>Bergnaum</td>
                                        <td>Jazlyn_Bergnaum11@yahoo.com</td>
                                        <td>Personal Loan Account</td>
                                    </tr>
                                    <tr>
                                        <td>Eldridge</td>
                                        <td>Maggio</td>
                                        <td>Eldridge_Maggio@yahoo.com</td>
                                        <td>Home Loan Account</td>
                                    </tr>
                                    <tr>
                                        <td>Rubie</td>
                                        <td>Kuhic</td>
                                        <td>Rubie54@hotmail.com</td>
                                        <td>Auto Loan Account</td>
                                    </tr>
                                    <tr>
                                        <td>Karli</td>
                                        <td>Grady</td>
                                        <td>Karli20@gmail.com</td>
                                        <td>Auto Loan Account</td>
                                    </tr>
                                    <tr>
                                        <td>Claude</td>
                                        <td>Hilll</td>
                                        <td>Claude.Hilll@yahoo.com</td>
                                        <td>Investment Account</td>
                                    </tr>
                                    <tr>
                                        <td>Dameon</td>
                                        <td>Streich</td>
                                        <td>Dameon_Streich@gmail.com</td>
                                        <td>Money Market Account</td>
                                    </tr>
                                    <tr>
                                        <td>Jalen</td>
                                        <td>Schimmel</td>
                                        <td>Jalen3@hotmail.com</td>
                                        <td>Personal Loan Account</td>
                                    </tr>
                                    <tr>
                                        <td>Fatima</td>
                                        <td>Heidenreich</td>
                                        <td>Fatima3@yahoo.com</td>
                                        <td>Credit Card Account</td>
                                    </tr>
                                    <tr>
                                        <td>Jaydon</td>
                                        <td>Volkman</td>
                                        <td>Jaydon_Volkman26@hotmail.com</td>
                                        <td>Investment Account</td>
                                    </tr>
                                    <tr>
                                        <td>Santos</td>
                                        <td>Tremblay</td>
                                        <td>Santos.Tremblay@gmail.com</td>
                                        <td>Personal Loan Account</td>
                                    </tr>
                                    <tr>
                                        <td>Emie</td>
                                        <td>Ondricka</td>
                                        <td>Emie_Ondricka@yahoo.com</td>
                                        <td>Investment Account</td>
                                    </tr>
                                    <tr>
                                        <td>Saige</td>
                                        <td>Bergnaum</td>
                                        <td>Saige39@yahoo.com</td>
                                        <td>Credit Card Account</td>
                                    </tr>
                                    <tr>
                                        <td>Brock</td>
                                        <td>Crona</td>
                                        <td>Brock26@yahoo.com</td>
                                        <td>Personal Loan Account</td>
                                    </tr>
                                    <tr>
                                        <td>Liana</td>
                                        <td>Harvey</td>
                                        <td>Liana.Harvey32@hotmail.com</td>
                                        <td>Savings Account</td>
                                    </tr>
                                    <tr>
                                        <td>Haylie</td>
                                        <td>Stiedemann</td>
                                        <td>Haylie.Stiedemann@yahoo.com</td>
                                        <td>Savings Account</td>
                                    </tr>
                                    <tr>
                                        <td>Hanna</td>
                                        <td>Wuckert</td>
                                        <td>Hanna44@gmail.com</td>
                                        <td>Home Loan Account</td>
                                    </tr>
                                    <tr>
                                        <td>Aron</td>
                                        <td>Hintz</td>
                                        <td>Aron.Hintz@hotmail.com</td>
                                        <td>Investment Account</td>
                                    </tr>
                                    <tr>
                                        <td>Eunice</td>
                                        <td>Ankunding</td>
                                        <td>Eunice.Ankunding72@yahoo.com</td>
                                        <td>Savings Account</td>
                                    </tr>
                                    <tr>
                                        <td>Mona</td>
                                        <td>VonRueden</td>
                                        <td>Mona.VonRueden@yahoo.com</td>
                                        <td>Credit Card Account</td>
                                    </tr>
                                    <tr>
                                        <td>Celestino</td>
                                        <td>Grant</td>
                                        <td>Celestino.Grant@yahoo.com</td>
                                        <td>Credit Card Account</td>
                                    </tr>
                                    <tr>
                                        <td>Zelda</td>
                                        <td>Wuckert</td>
                                        <td>Zelda_Wuckert@yahoo.com</td>
                                        <td>Auto Loan Account</td>
                                    </tr>
                                    <tr>
                                        <td>Elmo</td>
                                        <td>Schaden</td>
                                        <td>Elmo43@gmail.com</td>
                                        <td>Home Loan Account</td>
                                    </tr>
                                    <tr>
                                        <td>Andres</td>
                                        <td>Hintz</td>
                                        <td>Andres.Hintz1@yahoo.com</td>
                                        <td>Auto Loan Account</td>
                                    </tr>
                                    <tr>
                                        <td>Mandy</td>
                                        <td>Senger</td>
                                        <td>Mandy4@yahoo.com</td>
                                        <td>Personal Loan Account</td>
                                    </tr>
                                    <tr>
                                        <td>Hayley</td>
                                        <td>Veum</td>
                                        <td>Hayley.Veum@hotmail.com</td>
                                        <td>Investment Account</td>
                                    </tr>
                                    <tr>
                                        <td>Wilmer</td>
                                        <td>Hoppe</td>
                                        <td>Wilmer_Hoppe@gmail.com</td>
                                        <td>Home Loan Account</td>
                                    </tr>
                                    <tr>
                                        <td>Lyric</td>
                                        <td>Rau</td>
                                        <td>Lyric_Rau39@gmail.com</td>
                                        <td>Money Market Account</td>
                                    </tr>
                                    <tr>
                                        <td>Mariela</td>
                                        <td>Davis</td>
                                        <td>Mariela_Davis43@hotmail.com</td>
                                        <td>Checking Account</td>
                                    </tr>
                                    <tr>
                                        <td>Estefania</td>
                                        <td>Spencer</td>
                                        <td>Estefania.Spencer@gmail.com</td>
                                        <td>Personal Loan Account</td>
                                    </tr>
                                    <tr>
                                        <td>Dolores</td>
                                        <td>Rau</td>
                                        <td>Dolores_Rau@hotmail.com</td>
                                        <td>Personal Loan Account</td>
                                    </tr>
                                    <tr>
                                        <td>Norma</td>
                                        <td>Bahringer</td>
                                        <td>Norma34@hotmail.com</td>
                                        <td>Personal Loan Account</td>
                                    </tr>
                                    <tr>
                                        <td>Letitia</td>
                                        <td>Parisian</td>
                                        <td>Letitia96@gmail.com</td>
                                        <td>Checking Account</td>
                                    </tr>
                                    <tr>
                                        <td>Earlene</td>
                                        <td>Stracke</td>
                                        <td>Earlene.Stracke64@hotmail.com</td>
                                        <td>Home Loan Account</td>
                                    </tr>
                                    <tr>
                                        <td>Lawson</td>
                                        <td>Sanford</td>
                                        <td>Lawson.Sanford@yahoo.com</td>
                                        <td>Home Loan Account</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            
                        </div><center>
                        <!--knob ends-->
                    </div>
                </div>
            </div>
            <!-- sparkline -->
       
            <!-- sparkline -->
            <!--rightside bar -->
            <div id="right">
                <div id="right-slim">
                    <div class="rightsidebar-right">
                        <div class="rightsidebar-right-content">
                            <div class="panel-tabs">
                                <ul class="nav nav-tabs nav-float" role="tablist">
                                    <li class="active text-center">
                                        <a href="#r_tab1" role="tab" data-toggle="tab"><i
                                                class="fa fa-fw ti-comments"></i></a>
                                    </li>
                                    <li class="text-center">
                                        <a href="#r_tab2" role="tab" data-toggle="tab"><i class="fa fa-fw ti-bell"></i></a>
                                    </li>
                                    <li class="text-center">
                                        <a href="#r_tab3" role="tab" data-toggle="tab"><i
                                                class="fa fa-fw ti-settings"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="r_tab1">
                                    <div id="slim_t1">
                                        <h5 class="rightsidebar-right-heading text-uppercase text-xs">
                                            <i class="menu-icon  fa fa-fw ti-user"></i>
                                            Contacts
                                        </h5>
                                        <ul class="list-unstyled margin-none">
                                            <li class="rightsidebar-contact-wrapper">
                                                <a class="rightsidebar-contact" href="#">
                                                    <img src="img/authors/avatar6.jpg"
                                                         class="img-circle pull-right" alt="avatar-image">
                                                    <i class="fa fa-circle text-xs text-primary"></i>
                                                    Annette
                                                </a>
                                            </li>
                                            <li class="rightsidebar-contact-wrapper">
                                                <a class="rightsidebar-contact" href="#">
                                                    <img src="img/authors/avatar.jpg"
                                                         class="img-circle pull-right" alt="avatar-image">
                                                    <i class="fa fa-circle text-xs text-primary"></i>
                                                    Jordan
                                                </a>
                                            </li>
                                            <li class="rightsidebar-contact-wrapper">
                                                <a class="rightsidebar-contact" href="#">
                                                    <img src="img/authors/avatar2.jpg"
                                                         class="img-circle pull-right" alt="avatar-image">
                                                    <i class="fa fa-circle text-xs text-primary"></i>
                                                    Stewart
                                                </a>
                                            </li>
                                            <li class="rightsidebar-contact-wrapper">
                                                <a class="rightsidebar-contact" href="#">
                                                    <img src="img/authors/avatar3.jpg"
                                                         class="img-circle pull-right" alt="avatar-image">
                                                    <i class="fa fa-circle text-xs text-warning"></i>
                                                    Alfred
                                                </a>
                                            </li>
                                            <li class="rightsidebar-contact-wrapper">
                                                <a class="rightsidebar-contact" href="#">
                                                    <img src="img/authors/avatar4.jpg"
                                                         class="img-circle pull-right" alt="avatar-image">
                                                    <i class="fa fa-circle text-xs text-danger"></i>
                                                    Eileen
                                                </a>
                                            </li>
                                            <li class="rightsidebar-contact-wrapper">
                                                <a class="rightsidebar-contact" href="#">
                                                    <img src="img/authors/avatar5.jpg"
                                                         class="img-circle pull-right" alt="avatar-image">
                                                    <i class="fa fa-circle text-xs text-muted"></i>
                                                    Robert
                                                </a>
                                            </li>
                                            <li class="rightsidebar-contact-wrapper">
                                                <a class="rightsidebar-contact" href="#">
                                                    <img src="img/authors/avatar7.jpg"
                                                         class="img-circle pull-right" alt="avatar-image">
                                                    <i class="fa fa-circle text-xs text-muted"></i>
                                                    Cassandra
                                                </a>
                                            </li>
                                        </ul>

                                        <h5 class="rightsidebar-right-heading text-uppercase text-xs">
                                            <i class="fa fa-fw ti-export"></i>
                                            Recent Updates
                                        </h5>
                                        <div>
                                            <ul class="list-unstyled">
                                                <li class="rightsidebar-notification">
                                                    <a href="#">
                                                        <i class="fa ti-comments-smiley fa-fw text-primary"></i>
                                                        New Comment
                                                    </a>
                                                </li>
                                                <li class="rightsidebar-notification">
                                                    <a href="#">
                                                        <i class="fa ti-twitter-alt fa-fw text-success"></i>
                                                        3 New Followers
                                                    </a>
                                                </li>
                                                <li class="rightsidebar-notification">
                                                    <a href="#">
                                                        <i class="fa ti-email fa-fw text-info"></i>
                                                        Message Sent
                                                    </a>
                                                </li>
                                                <li class="rightsidebar-notification">
                                                    <a href="#">
                                                        <i class="fa ti-write fa-fw text-warning"></i>
                                                        New Task
                                                    </a>
                                                </li>
                                                <li class="rightsidebar-notification">
                                                    <a href="#">
                                                        <i class="fa ti-export fa-fw text-danger"></i>
                                                        Server Rebooted
                                                    </a>
                                                </li>
                                                <li class="rightsidebar-notification">
                                                    <a href="#">
                                                        <i class="fa ti-info-alt fa-fw text-primary"></i>
                                                        Server Not Responding
                                                    </a>
                                                </li>
                                                <li class="rightsidebar-notification">
                                                    <a href="#">
                                                        <i class="fa ti-shopping-cart fa-fw text-success"></i>
                                                        New Order Placed
                                                    </a>
                                                </li>
                                                <li class="rightsidebar-notification">
                                                    <a href="#">
                                                        <i class="fa ti-money fa-fw text-info"></i>
                                                        Payment Received
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="r_tab2">
                                    <div id="slim_t2">
                                        <h5 class="rightsidebar-right-heading text-uppercase text-xs">
                                            <i class="fa fa-fw ti-bell"></i>
                                            Notifications
                                        </h5>
                                        <ul class="list-unstyled m-t-15 notifications">
                                            <li>
                                                <a href="#" class="message icon-not striped-col">
                                                    <img class="message-image img-circle"
                                                         src="img/authors/avatar3.jpg" alt="avatar-image">

                                                    <div class="message-body">
                                                        <strong>John Doe</strong>
                                                        <br>
                                                        5 members joined today
                                                        <br>
                                                        <small class="noti-date">Just now</small>
                                                    </div>

                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="message icon-not">
                                                    <img class="message-image img-circle"
                                                         src="img/authors/avatar.jpg" alt="avatar-image">
                                                    <div class="message-body">
                                                        <strong>Tony</strong>
                                                        <br>
                                                        likes a photo of you
                                                        <br>
                                                        <small class="noti-date">5 min</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="message icon-not striped-col">
                                                    <img class="message-image img-circle"
                                                         src="img/authors/avatar6.jpg" alt="avatar-image">

                                                    <div class="message-body">
                                                        <strong>John</strong>
                                                        <br>
                                                        Dont forgot to call...
                                                        <br>
                                                        <small class="noti-date">11 min</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="message icon-not">
                                                    <img class="message-image img-circle"
                                                         src="img/authors/avatar1.jpg" alt="avatar-image">
                                                    <div class="message-body">
                                                        <strong>Jenny Kerry</strong>
                                                        <br>
                                                        Done with it...
                                                        <br>
                                                        <small class="noti-date">1 Hour</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="message icon-not striped-col">
                                                    <img class="message-image img-circle"
                                                         src="img/authors/avatar7.jpg" alt="avatar-image">

                                                    <div class="message-body">
                                                        <strong>Ernest Kerry</strong>
                                                        <br>
                                                        2 members joined today
                                                        <br>
                                                        <small class="noti-date">3 Days</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="text-right noti-footer"><a href="#">View All Notifications <i
                                                    class="ti-arrow-right"></i></a></li>
                                        </ul>
                                        <h5 class="rightsidebar-right-heading text-uppercase text-xs">
                                            <i class="fa fa-fw ti-check-box"></i>
                                            Tasks
                                        </h5>
                                        <ul class="list-unstyled m-t-15">
                                            <li>
                                                <div>
                                                    <p>
                                                        <span>Button Design</span>
                                                        <small class="pull-right text-muted">40%</small>
                                                    </p>
                                                    <div class="progress progress-xs progress-striped active">
                                                        <div class="progress-bar progress-bar-success"
                                                             role="progressbar"
                                                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                                             style="width: 40%">
                                                            <span class="sr-only">40% Complete (success)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <p>
                                                        <span>Theme Creation</span>
                                                        <small class="pull-right text-muted">20%</small>
                                                    </p>
                                                    <div class="progress progress-xs progress-striped active">
                                                        <div class="progress-bar progress-bar-info" role="progressbar"
                                                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                                                             style="width: 20%">
                                                            <span class="sr-only">20% Complete</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <p>
                                                        <span>XYZ Task To Do</span>
                                                        <small class="pull-right text-muted">60%</small>
                                                    </p>
                                                    <div class="progress progress-xs progress-striped active">
                                                        <div class="progress-bar progress-bar-warning"
                                                             role="progressbar"
                                                             aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                             style="width: 60%">
                                                            <span class="sr-only">60% Complete (warning)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <p>
                                                        <span>Transitions Creation</span>
                                                        <small class="pull-right text-muted">80%</small>
                                                    </p>
                                                    <div class="progress progress-xs progress-striped active">
                                                        <div class="progress-bar progress-bar-danger" role="progressbar"
                                                             aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                                             style="width: 80%">
                                                            <span class="sr-only">80% Complete (danger)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="text-right"><a href="#">View All Tasks <i
                                                    class="ti-arrow-right"></i></a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="r_tab3">
                                    <div id="slim_t3">
                                        <h5 class="rightsidebar-right-heading text-uppercase gen-sett-m-t text-xs">
                                            <i class="fa fa-fw ti-settings"></i>
                                            General
                                        </h5>
                                        <ul class="list-unstyled settings-list m-t-10">
                                            <li>
                                                <label for="status">Available</label>
                                                <span class="pull-right">
                                            <input type="checkbox" id="status" name="my-checkbox" checked>
                                        </span>
                                            </li>
                                            <li>
                                                <label for="email-auth">Login with Email</label>
                                                <span class="pull-right">
                                            <input type="checkbox" id="email-auth" name="my-checkbox">
                                        </span>
                                            </li>
                                            <li>
                                                <label for="update">Auto Update</label>
                                                <span class="pull-right">
                                            <input type="checkbox" id="update" name="my-checkbox">
                                        </span>
                                            </li>

                                        </ul>
                                        <h5 class="rightsidebar-right-heading text-uppercase text-xs">
                                            <i class="fa fa-fw ti-volume"></i>
                                            Sound & Notification
                                        </h5>
                                        <ul class="list-unstyled settings-list m-t-10">
                                            <li>
                                                <label for="chat-sound">Chat Sound</label>
                                                <span class="pull-right">
                                            <input type="checkbox" id="chat-sound" name="my-checkbox" checked>
                                        </span>
                                            </li>
                                            <li>
                                                <label for="noti-sound">Notification Sound</label>
                                                <span class="pull-right">
                                            <input type="checkbox" id="noti-sound" name="my-checkbox">
                                        </span>
                                            </li>
                                            <li>
                                                <label for="remain">Remainder </label>
                                                <span class="pull-right">
                                            <input type="checkbox" id="remain" name="my-checkbox" checked>
                                        </span>

                                            </li>
                                            <li>
                                                <label for="vol">Volume</label>
                                                <input type="range" id="vol" min="0" max="100" value="15">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="background-overlay"></div>
        </section>
        <!-- /.content -->
    </aside>
    <!-- /.right-side -->
</div>
<!-- ./wrapper -->
<!-- global js -->
<script src="../../ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> <script src="https://cdn.jsdelivr.net/g/bootstrap@3.3.7,bootstrap.switch@3.3.2,jquery.nicescroll@3.6.0"></script> <script src="js/app.js" type="text/javascript"></script>
<!-- end of global js -->
<!-- begining of page level js -->
<script type="text/javascript" src="vendors/datatables/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="vendors/datatables/js/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="vendors/datatables/js/dataTables.buttons.js"></script>
<script type="text/javascript" src="vendors/datatables/js/dataTables.colReorder.js"></script>
<script type="text/javascript" src="vendors/datatables/js/dataTables.responsive.js"></script>
<script type="text/javascript" src="vendors/datatables/js/dataTables.rowReorder.js"></script>
<script type="text/javascript" src="vendors/datatables/js/buttons.colVis.js"></script>
<script type="text/javascript" src="vendors/datatables/js/buttons.html5.js"></script>
<script type="text/javascript" src="vendors/datatables/js/buttons.bootstrap.js"></script>
<script type="text/javascript" src="vendors/datatables/js/buttons.print.js"></script>
<script type="text/javascript" src="vendors/datatables/js/dataTables.scroller.js"></script>
<script src="js/custom_js/advanced_datatables.js" type="text/javascript"></script>
</body>


</html>
