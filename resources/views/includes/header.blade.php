<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang="zxx"> <!--<![endif]-->

<!-- Mirrored from amentotech.com/htmls/jobforest/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Apr 2019 09:44:20 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Job Forest</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="{{url('public/')}}apple-touch-icon.png">
    <link rel="icon" href="{{url('public/')}}/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="{{url('public/')}}/css/bootstrap.css">
    <link rel="stylesheet" href="{{url('public/')}}/css/normalize.css">
    <link rel="stylesheet" href="{{url('public/')}}/css/fontawesome/fontawesome-all.css">
    <link rel="stylesheet" href="{{url('public/')}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('public/')}}/css/themify-icons.css">
    <link rel="stylesheet" href="{{url('public/')}}/css/owl.carousel.css">
    <link rel="stylesheet" href="{{url('public/')}}/css/linearicons.css">
    <link rel="stylesheet" href="{{url('public/')}}/css/prettyPhoto.css">
    <link rel="stylesheet" href="{{url('public/')}}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{url('public/')}}/css/chartist.css">
    <link rel="stylesheet" href="{{url('public/')}}/css/scrollbar.css">
    <link rel="stylesheet" href="{{url('public/')}}/css/chosen.css">
    <link rel="stylesheet" href="{{url('public/')}}/css/main.css">
    <link rel="stylesheet" href="{{url('public/')}}/css/color.css">
    <link rel="stylesheet" href="{{url('public/')}}/css/transitions.css">
    <link rel="stylesheet" href="{{url('public/')}}/css/responsive.css">
    <script src="{{url('public/')}}/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    @yield('css')
</head>
<body class="jf-home jf-userlogin">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!--************************************
        Preloader Start
*************************************-->
<div class="preloader-outer">
    <div class='loader'></div>
</div>
<!--************************************
        Preloader End
*************************************-->
<!--************************************
        Wrapper Start
*************************************-->
<div id="jf-wrapper" class="jf-wrapper">
    <!--************************************
            Header Start
    *************************************-->
    <header id="jf-header" class="jf-header jf-haslayout">

        <div class="jf-navigationlogoarea">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <strong class="jf-logo"><a href="index.html"><img src="{{url('public/')}}/images/logo.png" alt="company logo here"></a></strong>
                        <div class="jf-rightarea">
                            <nav id="jf-nav" class="jf-nav navbar-expand-lg navbar-toggleable-sm">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <i class="lnr lnr-menu"></i>
                                </button>
                                <div class="collapse navbar-collapse jf-navigation" id="navbarNav">
                                    <ul>
                                        <li class="menu-item-has-children page_item_has_children">
                                            <a href="javascript:void(0);">Jobs<em>Find Tons Of Jobs</em>
                                            </a>
                                            <ul class="sub-menu">
                                                <li><a href="{{route('jobsearch')}}">job search</a></li>
                                                <li><a href="{{route('jobdetails')}}">job Details</a></li>
                                                <li><a href="jobdetailexternallink.html">job detail external link</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children page_item_has_children">
                                            <a href="javascript:void(0);">Employers<em>Search Employer</em>
                                            </a>
                                            <ul class="sub-menu">
                                                <li><a href="employersgrid.html">Employers Grid</a></li>
                                                <li><a href="employerslist.html">Employers List</a></li>
                                                <li><a href="employersdetails.html">Employers Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children page_item_has_children">
                                            <a href="javascript:void(0);">
                                                Candidates
                                                <em>Find Proffesionals</em>
                                            </a>
                                            <ul class="sub-menu">
                                                <li><a href="candidatesgrid.html">Candidates Grid</a></li>
                                                <li><a href="candidateslist.html">Candidates List</a></li>
                                                <li><a href="candidatesdetails.html">Candidates Detail</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children page_item_has_children">
                                            <a href="javascript:void(0);" class="jf-menubar">
                                                <span>More</span>
                                                <img src="{{url('public/')}}/images/nav-more.png" alt="image description">
                                            </a>
                                            <ul class="sub-menu">
                                                <li class="menu-item-has-children page_item_has_children">
                                                    <a href="javascript:void(0);">Home</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="index.html">Home 1</a></li>
                                                        <li><a href="index2.html">Home 2</a></li>
                                                        <li><a href="index3.html">Home 3</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children page_item_has_children">
                                                    <a href="javascript:void(0);">Blog</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="bloggrid.html">Blog Grid</a></li>
                                                        <li><a href="bloglist.html">Blog List</a></li>
                                                        <li><a href="blogdetail.html">Blog Detail</a></li>
                                                        <li><a href="blogdetailshort.html">Blog Detail Short</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children page_item_has_children">
                                                    <a href="javascript:void(0);">success story</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="successstorygrid.html">success story grid</a></li>
                                                        <li><a href="successstorylist.html">success story list</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{route('login')}}">sign in</a></li>
                                                <li><a href="{{route('register')}}">sign up</a></li>
                                                <li><a href="comingsoon.html">Coming Soon</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--************************************
            Header End
    *************************************-->