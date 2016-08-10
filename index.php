<?php
include('includes/connection.php');
if (isset($_GET['i'])) {
    $frame = mysql_query("select * from frames where frames_category_id='" . $_GET['i'] . "'");
    $data = mysql_num_rows($frame);
} else {
    $frame = mysql_query("select * from frames");
    $data = mysql_num_rows($frame);
}
?>
<!DOCTYPE html PUBLIC>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <title>Collage Picture Gallery</title>
        <!-- ************************************************************************ !-->
        <!-- *****       ¤ Designed and Developed by LEADconcept               ***** !-->
        <!-- *****               http://www.leadconcept.com                     ***** !-->
        <!-- ************************************************************************ !-->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <!---------header start------>
        <div class=" container continrbg">
            <div class="col-sm-12 padding ">
                <div class="col-xs-12 col-sm-12  headrbg ">
                    <div class="col-xs-12 col-sm-12 padding ">
                        <div class="col-xs-12 col-sm-6 padding "> <img src="images/logo.png"  class="img-responsive"/> </div>
                        <div class="col-xs-12 col-sm-6 padding "> <img src="images/cartimg.png"  class="img-responsive pull-right"/> </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 navbar navbar-default menubg " role="navigation" style="margin-bottom:0;">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="#">Home</a></li>
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
                <div class="contentinr col-md-12">
                    <label class="col-md-12" style="text-align: center;">Photo Collages - Select Your Layout</label>
                    <p class="col-md-12" style="text-align: center;">We offer a large collection of photo collages with upto 20 apertures in various shapes and sizes.<br />Simply select a layout, Upload your photos then select a frame in our design studio.</p>
                </div>
            </div>
            <!--<div class="col-xs-12 col-sm-12   "> <img src="images/imgpobar.png" width="100%" class="img-responsive"/> </div>-->
            <div class="col-xs-12 col-sm-4  col-md-3" style="padding-right:0;">
                <div class="collage-layout-filter cf">
                    <h2 style="background-color: #2d2d37; color: #fff; margin-bottom: 20px;">Frames Available</h2>
                    <ul data-c-format="r">
                        <li data-filter-slots="3" <?php if (!isset($_GET['i'])) echo 'class="selected"'; ?>><a href="<?php echo $_SERVER['PHP_SELF']; ?>">All Frames</a></li>
                        <li <?php if (isset($_GET['i']) && ($_GET['i'] == 1)) echo 'class="selected"'; ?>><a href="<?php echo $_SERVER['PHP_SELF']; ?>?i=1">3 Apertures</a></li>
                        <li <?php if (isset($_GET['i']) && ($_GET['i'] == 2)) echo 'class="selected"'; ?>><a href="<?php echo $_SERVER['PHP_SELF']; ?>?i=2">4 Apertures</a></li>
                        <li <?php if (isset($_GET['i']) && ($_GET['i'] == 3)) echo 'class="selected"'; ?>><a href="<?php echo $_SERVER['PHP_SELF']; ?>?i=3">5 Apertures</a></li>
                        <li <?php if (isset($_GET['i']) && ($_GET['i'] == 4)) echo 'class="selected"'; ?>><a href="<?php echo $_SERVER['PHP_SELF']; ?>?i=4">6 Apertures</a></li>
                        <li <?php if (isset($_GET['i']) && ($_GET['i'] == 5)) echo 'class="selected"'; ?>><a href="<?php echo $_SERVER['PHP_SELF']; ?>?i=5">7 Apertures</a></li>
                        <li <?php if (isset($_GET['i']) && ($_GET['i'] == 6)) echo 'class="selected"'; ?>><a href="<?php echo $_SERVER['PHP_SELF']; ?>?i=6">8 Apertures</a></li>
                        <li <?php if (isset($_GET['i']) && ($_GET['i'] == 7)) echo 'class="selected"'; ?>><a href="<?php echo $_SERVER['PHP_SELF']; ?>?i=7">9 Apertures</a></li>
                        <li <?php if (isset($_GET['i']) && ($_GET['i'] == 8)) echo 'class="selected"'; ?>><a href="<?php echo $_SERVER['PHP_SELF']; ?>?i=8">10 Apertures</a></li>
                        <li <?php if (isset($_GET['i']) && ($_GET['i'] == 9)) echo 'class="selected"'; ?>><a href="<?php echo $_SERVER['PHP_SELF']; ?>?i=9">11 Apertures</a></li>
                        <li <?php if (isset($_GET['i']) && ($_GET['i'] == 10)) echo 'class="selected"'; ?>><a href="<?php echo $_SERVER['PHP_SELF']; ?>?i=10">12 Apertures</a></li>
                        <li <?php if (isset($_GET['i']) && ($_GET['i'] == 11)) echo 'class="selected"'; ?>><a href="<?php echo $_SERVER['PHP_SELF']; ?>?i=11">13 Apertures</a></li>
                        <li <?php if (isset($_GET['i']) && ($_GET['i'] == 12)) echo 'class="selected"'; ?>><a href="<?php echo $_SERVER['PHP_SELF']; ?>?i=12">14 Apertures</a></li>
                        <li <?php if (isset($_GET['i']) && ($_GET['i'] == 13)) echo 'class="selected"'; ?>><a href="<?php echo $_SERVER['PHP_SELF']; ?>?i=13">16 Apertures</a></li>
                        <li <?php if (isset($_GET['i']) && ($_GET['i'] == 14)) echo 'class="selected"'; ?>><a href="<?php echo $_SERVER['PHP_SELF']; ?>?i=14">18 Apertures</a></li>
                        <li <?php if (isset($_GET['i']) && ($_GET['i'] == 15)) echo 'class="selected"'; ?>><a href="<?php echo $_SERVER['PHP_SELF']; ?>?i=15">20 Apertures</a></li>
                        <li <?php if (isset($_GET['i']) && ($_GET['i'] == 16)) echo 'class="selected"'; ?>><a href="<?php echo $_SERVER['PHP_SELF']; ?>?i=16">Babies</a></li>
                        <li <?php if (isset($_GET['i']) && ($_GET['i'] == 17)) echo 'class="selected"'; ?>><a href="<?php echo $_SERVER['PHP_SELF']; ?>?i=17">Wedding Anniversaries</a></li>
                        <li <?php if (isset($_GET['i']) && ($_GET['i'] == 18)) echo 'class="selected"'; ?>><a href="<?php echo $_SERVER['PHP_SELF']; ?>?i=18">Family And Pets</a></li>
                        <li <?php if (isset($_GET['i']) && ($_GET['i'] == 19)) echo 'class="selected"'; ?>><a href="<?php echo $_SERVER['PHP_SELF']; ?>?i=19">Remembrance</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-9 ">
                <div class="col-xs-12 col-sm-12  shopsecmain" style="border:0px;">
                    <div class="row">
                        <!--Loop Starts Here-->
                        <?php
                        if ($data > 0) {
                            $size_arr = mysql_num_rows($frame);
                            while ($row = mysql_fetch_array($frame)) {
                                ?>
                                <div class="col-xs-12 col-sm-6 shopsec clgfrmbox" style="border: 1px solid #e4e4e4;">
                                    <div class="col-xs-12 col-sm-12 ">
                                        <label class="catgryimgtitle">&nbsp;</label>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 form-group">
                                        <a href="frames_display/<?php echo $row['frame_id']; ?>.php?f_id=<?php echo $row['frame_id']; ?>"><img class="img_shadow img-responsive catgrysecimg clgfrmboximg" src="frames_images/<?php echo $row['frame_id']; ?>.png"></a>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 form-group">
                                        <a class="btn btn-green btn-small pull-right" href="frames_display/<?php echo $row['frame_id']; ?>.php?f_id=<?php echo $row['frame_id']; ?>" data-original-title="" title="">Create a Collage</a> 
                                    </div>
                                </div>
                                <?php } ?>
                            <?php } else { ?>
                            <label class="col-md-12" style="text-align: center;">Sorry - No Frame Found</label>
							<?php } ?>
                        <!--Loop Starts Here-->
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12  col-lg-12 ">
                <div class="row">
                    <div class=" footer ">
                        <div class="container">
                            <div class=" col-xs-12 col-sm-6 col-md-3  col-lg-3  footerlinks  ">
                                <div class="clgfrmsinfo">
                                    <div class="clgfrmsinfolbl">
                                        <label>information pages</label>
                                    </div>
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Aims &amp; Objectives</a></li>
                                        <li><a href="#">Our Homes</a></li>
                                        <li><a href="#">Contact Us </a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Aims &amp; Objectives</a></li>
                                        <li><a href="#">Our Homes</a></li>
                                        <li><a href="#">Contact Us </a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Aims &amp; Objectives</a></li>
                                        <li><a href="#">Our Homes</a></li>
                                        <li><a href="#">Contact Us </a></li>
                                        <li><a href="#">Aims &amp; Objectives</a></li>
                                        <li><a href="#">Our Homes</a></li>
                                        <li><a href="#">Contact Us </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=" col-xs-12 col-sm-6 col-md-3  col-lg-3  footerlinks  ">
                                <div class="clgfrmsinfo">
                                    <div class="clgfrmsinfolbl">
                                        <label>our services </label>
                                    </div>
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Aims &amp; Objectives</a></li>
                                        <li><a href="#">Our Homes</a></li>
                                        <li><a href="#">Contact Us </a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Aims &amp; Objectives</a></li>
                                        <li><a href="#">Our Homes</a></li>
                                        <li><a href="#">Contact Us </a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Aims &amp; Objectives</a></li>
                                        <li><a href="#">Our Homes</a></li>
                                        <li><a href="#">Contact Us </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=" col-xs-12 col-sm-6 col-md-3  col-lg-3  footerlinks  ">
                                <div class="clgfrmsrating">
                                    <div class="clgfrmsinfolbl">
                                        <label>Trustpilot Reviews</label>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 padding ratingarea">
                                        <h1>Excellent</h1>
                                        <img src="images/starsimg.png" class="img-responsive" />
                                        <p class="review-count">731 customers have written a review on Trustpilot</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 padding">
                                        <h2 class="hdrreviews">Selected reviews</h2>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 "> <img src="images/starsimg.png" class="col-xs-8 col-sm-5 img-responsive" />
                                        <time datetime="2015-11-27T14:14:11">27 Nov</time>
                                        <h3>Quick delivery a month before Xmas. Good protective packing.</h3>
                                        <p class="desc">The frame was delivered earlier than expected, there was good protective packing. 
                                            The non reflective acrylic cover does exactly what it says.
                                            Love… <a target="_blank" href="#">Read&nbsp;more</a></p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 "> <img src="images/starsimg.png" class="col-xs-8 col-sm-5 img-responsive" />
                                        <time datetime="2015-11-27T14:14:11">27 Nov</time>
                                        <h3>Quick delivery a month before Xmas. Good protective packing.</h3>
                                        <p class="desc">The frame was delivered earlier than expected, there was good protective packing. 
                                            The non reflective acrylic cover does exactly what it says.
                                            Love… <a target="_blank" href="#">Read&nbsp;more</a></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class=" col-xs-12 col-sm-6 col-md-3  col-lg-3  footerlinks  ">
                                <div class="clgfrmsrating">
                                    <div class="clgfrmsinfolbl">
                                        <label>Latest Tweets</label>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 padding twetsmainarea">
                                        <h1>Tweets</h1>
                                        <div class="col-xs-12 col-sm-12 twetarea">
                                            <div class="row">
                                                <div class="col-xs-6 col-sm-3"> <img src="images/unknown.png" class="img-responsive" /> </div>
                                                <div class="col-xs-6 col-sm-8">
                                                    <h3> The Picture Gallery</h3>
                                                </div>
                                                <div class="clearfix" style="padding:10px;"></div>
                                                <div class="col-xs-12 col-sm-12 twetstxt">
                                                    <p>frame was delivered earlier than expected, there was good protective packing. 
                                                        The non reflective acrylic cover does exactly what it says.</p>
                                                    <a href="#">#bizlink</a><a href="#">#bizlink</a><a href="#">#bizlink</a> </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 twetarea">
                                            <div class="row">
                                                <div class="col-xs-6 col-sm-3"> <img src="images/unknown.png" class="img-responsive" /> </div>
                                                <div class="col-xs-6 col-sm-8">
                                                    <h3> The Picture Gallery</h3>
                                                </div>
                                                <div class="clearfix" style="padding:10px;"></div>
                                                <div class="col-xs-12 col-sm-12 twetstxt">
                                                    <p>frame was delivered earlier than expected, there was good protective packing. 
                                                        The non reflective acrylic cover does exactly what it says.</p>
                                                    <a href="#">#bizlink</a><a href="#">#bizlink</a><a href="#">#bizlink</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div style="height:26px;" class="clearfix"></div>
                        <div class="clearfix" id="footer-inner"> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="js/jquery-1.11.1.js" type="text/javascript"></script> 
    <script src="js/bootstrap.js"></script>
</html>