<?php include 'header.php'; ?>

<style>
.mixed-3-sizeslg{
	background:#eef3fa;
	height:375px;
	overflow:hidden;	
		

}
.mixed-3-sizessm{
	background:#eef3fa;
	height:175px;	
	overflow:hidden;
}
.paddingadjust{
       padding: 48px 35px 29px 53px !important;
    }
</style>
<!--Frame Div Starts-->

<div class="col-xs-12 col-sm-8 col-md-8"> 
    <ul id="c-designer-header-tools">
        <li>Auto-fill<span class="icon-magic"></span></li>
        <li>Edit text<span class="icon-text-height"></span></li>
        <li>Clear collage<span class="icon-eraser"></span></li>
        <li class="pull-right"><a href="../index.php" style="color:#fff;">Change template<span class="icon-th"></span></a></li>
    </ul>
    <div id="c-designer">
        <div id="c-designer-layout-wrapper">
    <div id="c-layout" class="c-layout-43-3-h-txt-vacation1 col-xs-12 col-sm-12 col-lg-12 clgframboxvr2 paddingadjust" >
      <div class="col-xs-12 col-sm-12  col-lg-12 ">
        <div class="row">
          <div  class=" col-xs-12 col-sm-12 col-lg-12 clgfrmimgltst5 clgletstbotom7  padding-left">
            <div id="c-slot-1" data-box-id="26" class="mixed-3-sizeslg c-layout-slot rect-v pos-2 ui-droppable frm2ht "></div>
          </div>
          
        </div>
      </div>
      <div class="col-xs-12 col-sm-12  col-lg-12 ">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-lg-6 clgfrmimgltst5   padding-left">
            <div id="c-slot-2" data-box-id="27" class="mixed-3-sizessm c-layout-slot rect-v pos-2 ui-droppable frm2ht"  style="overflow:hidden;"></div>
          </div>
          <div class="col-xs-12 col-sm-6 col-lg-6 clgfrmimgltst5   padding-left">
            <div id="c-slot-3" data-box-id="28" class="mixed-3-sizessm c-layout-slot rect-v pos-2 ui-droppable frm2ht" style="overflow:hidden;" ></div>
          </div>
                </div>
          
      </div>
      <div class="clearfix"></div>
      <span id="page_2">
                <div placeholder="Dein Text hier" id="c-text" class="seconds">Enter text here (Optional)</div>
            </span>
    </div>
    <div class="clearfix hidden-lg" style="height:20px;"></div>
  </div>
</div>         
</div>
<div id="get_slot_id"></div>
<!--Frame Div Ends-->
<?php
include 'uploadimage_sidebar.php';
include 'footer.php';
?>