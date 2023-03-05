<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Alban Okoby">
    <meta name="description" content="Emmanuel Alban Okoby est un developpeur, formateur et encadreur
         qui conçoit des interfaces de sites et applications web | ceci est l'un de
          ses travaux DE FORMAION, j'ai nommé uvci_clone | Accueil">
    <title> CLONE UVCI | ADMIN</title>
    <link rel="shortcut icon" href="assets/image/alban.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <!-- font-awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
        integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- css personalisé -->
    <link rel="stylesheet" href="../public/assets/css/admin.css">


</head>

<body>
    <!-- Author : EMMANUEL ALBAN OKOBY  -->

    <header>
        <div class="utilisateur">
            <img src="../public/assets/files/uvci_im.PNG" alt="">
            <h3 class="nom">ESPACE <br> D'ADMINISTRATION</h3>
        </div>
        <div class="navbar">
            <ul>
                <li><a href="#home">Accueil</a></li>
                <li><a href="#presentation">Presentation</a></li>
                <li><a href="#videos">Videos</a></li>
                <li><a href="#autre">Autre 1</a></li>
                <li><a href="#autre2">Autre</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </header>
    <div id="menuIcon" class="fas fa-bars"></div>


    <section id="home">



        <h2 class="text-center">VOTRE ESPACE ADMIN
        </h2>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <span></span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-6 col-md-6">
                                    <a href="#" class="btn btn-danger btn-lg" role="button"><span
                                            class="fa fa-figma"></span> <br />Apps</a>
                                    <a href="#" class="btn btn-main btn-lg" role="button"><span
                                            class="fa fa-book"></span> <br />Bookmarks</a>
                                    <a href="#" class="btn btn-primary btn-lg" role="button"><span
                                            class="fa fa-bug"></span> <br />Reports</a>
                                    <a href="#" class="btn btn-primary btn-lg" role="button"><span
                                            class="glyphicon glyphicon-comment"></span> <br />Comments</a>
                                </div>
                                <div class="col-xs-6 col-md-6">
                                    <a href="#" class="btn btn-success btn-lg" role="button"><span
                                            class="glyphicon glyphicon-user"></span> <br />Users</a>
                                    <a href="#" class="btn btn-info btn-lg" role="button"><span
                                            class="glyphicon glyphicon-file"></span> <br />Notes</a>
                                    <a href="#" class="btn btn-primary btn-lg" role="button"><span
                                            class="glyphicon glyphicon-picture"></span> <br />Photos</a>
                                    <a href="#" class="btn btn-primary btn-lg" role="button"><span
                                            class="glyphicon glyphicon-tag"></span> <br />Tags</a>
                                </div>
                            </div>
                            <a href="#" class="btn btn-success btn-lg btn-block" role="button"><span
                                    class="glyphicon glyphicon-globe"></span> Site Web</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>



    <section class="all-section">
        <!-- SECTION VIDEOS -->
        <div id="videos">
            <div class="row align-items-end mb-4 pb-2">
                <div class="col-md-8">
                    <div class="section-title text-center text-md-start">
                        <h4 class="title mb-4">VIDEOS DE L'ACCUEIL</h4>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 mt-4 mt-sm-0 d-none d-md-block">
                    <div class="text-center text-md-end">
                        <a href="#" class="">Voir Toutes les videos <span class="fa fa-arrow-right"></span>
                        </a>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card border-0 bg-light rounded shadow">
                        <div class="card-body p-4">
                            <span class="badge rounded-pill bg-main float-md-end mb-3 mb-sm-0">Full time</span>
                            <h5>Web Designer</h5>
                            <div class="mt-3">
                                
                                <span class="text-muted d-block"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                    USA</span>
                            </div>

                            <div class="mt-3">
                                <a href="page-job-detail.html" class="btn btn-main">View Details</a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card border-0 bg-light rounded shadow">
                        <div class="card-body p-4">
                            <span class="badge rounded-pill bg-main float-md-end mb-3 mb-sm-0">Remote</span>
                            <h5>Front-end Developer</h5>
                            <div class="mt-3">
                                
                                <span class="text-muted d-block"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                    USA</span>
                            </div>

                            <div class="mt-3">
                                <a href="#" class="btn btn-main">View Details</a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card border-0 bg-light rounded shadow">
                        <div class="card-body p-4">
                            <span class="badge rounded-pill bg-main float-md-end mb-3 mb-sm-0">Contract</span>
                            <h5>Web Developer</h5>
                            <div class="mt-3">
                                
                                <span class="text-muted d-block"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                    USA</span>
                            </div>

                            <div class="mt-3">
                                <a href="page-job-detail.html" class="btn btn-main">View Details</a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card border-0 bg-light rounded shadow">
                        <div class="card-body p-4">
                            <span class="badge rounded-pill bg-main float-md-end mb-3 mb-sm-0">WFH</span>
                            <h5>Back-end Developer</h5>
                            <div class="mt-3">
                                
                                <span class="text-muted d-block"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                    USA</span>
                            </div>

                            <div class="mt-3">
                                <a href="page-job-detail.html" class="btn btn-main">View Details</a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card border-0 bg-light rounded shadow">
                        <div class="card-body p-4">
                            <span class="badge rounded-pill bg-main float-md-end mb-3 mb-sm-0">Full time</span>
                            <h5>UX / UI Designer</h5>
                            <div class="mt-3">
                                
                                <span class="text-muted d-block"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                    USA</span>
                            </div>

                            <div class="mt-3">
                                <a href="page-job-detail.html" class="btn btn-main">View Details</a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card border-0 bg-light rounded shadow">
                        <div class="card-body p-4">
                            <span class="badge rounded-pill bg-main float-md-end mb-3 mb-sm-0">Remote</span>
                            <h5>Tester</h5>
                            <div class="mt-3">
                                
                                <span class="text-muted d-block"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                    USA</span>
                            </div>

                            <div class="mt-3">
                                <a href="page-job-detail.html" class="btn btn-main">View Details</a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card border-0 bg-light rounded shadow">
                        <div class="card-body p-4">
                            <span class="badge rounded-pill bg-main float-md-end mb-3 mb-sm-0">Remote</span>
                            <h5>Tester</h5>
                            <div class="mt-3">
                                
                                <span class="text-muted d-block"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                    USA</span>
                            </div>

                            <div class="mt-3">
                                <a href="page-job-detail.html" class="btn btn-main">View Details</a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card border-0 bg-light rounded shadow">
                        <div class="card-body p-4">
                            <span class="badge rounded-pill bg-main float-md-end mb-3 mb-sm-0">Remote</span>
                            <h5>Tester</h5>
                            <div class="mt-3">
                                
                                <span class="text-muted d-block"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                    USA</span>
                            </div>

                            <div class="mt-3">
                                <a href="page-job-detail.html" class="btn btn-main">View Details</a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
              

                <div class="col-12 mt-4 pt-2 d-block d-md-none text-center">
                    <a href="#" class="btn btn-primary">View more Jobs <svg xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-arrow-right fea icon-sm">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg></a>
                </div><!--end col-->
            </div><!--end row-->
        </div>
        <!-- END SECTION VIDEO -->

    </section>
    <!-- Scroll top button -->
    <div class="scroll_top">
        <a href="#home">
            <i class="fas fa-arrow-alt-circle-up"></i>
        </a>
    </div>

    </script>

    <!-- cdn JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- JavaScript personalisé -->
    <script src="../public/assets/js/admin.js"></script>
</body>

</html>