<?php include('../includes/connection.php'); ?>
<!DOCTYPE html PUBLIC>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
        
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <title>Collage Picture Gallery</title>
        <!-- ************************************************************************ !-->
        <!-- *****       ¤ Designed and Developed by LEADconcept               ***** !-->
        <!-- *****               http://www.leadconcept.com                     ***** !-->
        <!-- ************************************************************************ !-->
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <!--Drag and drop work-->
        <link rel="stylesheet" href="../css/collage-designer-20150304.css" type="text/css" media="screen">
        <link rel="stylesheet" href="../css/jquery.colorbox.css" type="text/css" media="screen">
        <link rel="stylesheet" href="../css/jquery.Jcrop.min.css" type="text/css" media="screen">
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery.min.js"></script>
        <script src="../js/jquery.Jcrop.js"></script>
        <script src="../js/leadceoncept.js"></script> 
        <style>
            #loading {
                width: 100%;
                height: 100%;
                top: 0px;
                left: 0px;
                position: fixed;
                display: none;
                opacity: 0.7;
                background-color: #fff;
                z-index: 99;
                text-align: center;
            }
            #gif {
                position: relative;
                top: 200px;
                z-index: 100;
            }
            input[type="text"] {
                border: 1px solid gainsboro;
                padding: 10px;
                transition: box-shadow 0.3s ease 0s, border 0.3s ease 0s;
            }
        </style>
    </head>
    <body>
        <!---------header start------>
        <div class=" container continrbg">
            <div class="col-sm-12 padding ">
                <div class="col-xs-12 col-sm-12  headrbg ">
                    <div class="col-xs-12 col-sm-12 padding ">
                        <div class="col-xs-12 col-sm-6 padding "> <img src="../images/logo.png"  class="img-responsive"/> </div>
                        <div class="col-xs-12 col-sm-6 padding "> <img src="../images/cartimg.png"  class="img-responsive pull-right"/> </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 navbar navbar-default menubg " role="navigation" style="margin-bottom:0;">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="../index.php">Home</a></li>
                            <li><a href="#">Aims & Objectives </a></li>
                            <li><a href="#"> Our Homes </a></li>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Aims & Objectives </a></li>
                            <li><a href="#"> Our Homes </a></li>
                            <li><a href="#"> Contact Us</a></li>
                        </ul>
                    </div>
                    <!--/.navbar-collapse --> 
                </div>
            </div>
            <div class="col-xs-12 col-sm-12  ">
                <div class="col-xs-12 col-sm-12  ">
                    <div class="contentinr col-md-12">
                        <label class="col-md-12" style="text-align: center;">Photo Collages - Select Your Layout</label>
                        <p class="col-md-12" style="text-align: center;">We offer a large collection of photo collages with upto 20 apertures in various shapes and sizes.<br />Simply select a layout, Upload your photos then select a frame in our design studio.</p>
                    </div>
                </div>
            </div>
            <div id="c-designer-modal">
                <div id="c-designer-modal-content">
                    <h4>Crop image<span class="icon-move"></span></h4>
                    <div id="c-designer-modal-crop" style="width: 280px; height: 430px;">
                        <img alt="modal image" id="c-designer-modal-img" width="280" height="430" src="" style="width: 280px; height: 430px; display: inline; visibility: visible;">
                    </div>
                    <span id="c-designer-modal-crop-confirm" class="btn btn-green"><span>Apply</span> <i class="glyphicon glyphicon-ok"></i></span> 
                </div>
            </div>