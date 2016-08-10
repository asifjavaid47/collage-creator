<!--Uploaded Images Div Starts-->
<div class="col-xs-12 col-sm-4  col-md-4" >
    <div class="collage-layout-filter cf form-group">
        <h2 style="background-color: #2d2d37; color: #fff; margin-bottom: 20px;">My photos</h2>
        <div id="c-designer-sidebar">
            <div class="col-md-12" id="c-designer-upload">
                <!--<form action="action.php" method="post" id="sbmit_form" enctype="multipart/form-data">-->
                <span class="btn btn-success fileinput-button">
                    <i class="glyphicon glyphicon-plus"></i>
                    <span>Add photos...</span>
                    <input type="file" multiple="multiple" name="files[]" id="fileupload">
                    <input type="hidden" name="page" value="<?php echo $_GET['f_id']; ?>">
                </span>
                <!--</form>-->
                <div id="loading">
                    <img src="../images/loader.gif" id="gif">
                </div>
            </div>
            <div id="c-designer-gallery">
                <ul id="c-designer-images" class="cf">
                    <?php
                    $ip = $_SERVER['REMOTE_ADDR'];
                    $sql = "SELECT * From frame_temp where ip_address='" . $ip . "'";
                    $result = mysql_query($sql);
                    if (mysql_num_rows($result) > 0) {
                        while ($row = mysql_fetch_array($result)) {
                            ?>
                            <li class="ui-draggable">
                                <img rel="../<?php echo "frames_temp/" . $row[2]; ?>" src="<?php echo "../frames_temp/" . $row[2]; ?>" id="<?php echo $row[0]; ?>" class="img-thumbnail" width="50" height="50">
                                <div class="c-image-remove" title="Remove image"></div>
                            </li>
                            <?php
                        }
                    }
                    ?>
                </ul>
            </div>                            
        </div>
    </div>
    <form action="save_frame_twentyfive.php" method="post">
        <input type="hidden" name="slot_1" id="slot_1" value=""/>
        <input type="hidden" name="frame_text" id="frame_text" value=""/>
        <input type="hidden" name="slot_1_de" id="slot_1_de" value=""/>
        <input type="hidden" name="slot_1_details" id="slot_1_details" value=""/>
        <input type="hidden" name="slot_2" id="slot_2" value=""/>
        <input type="hidden" name="slot_2_de" id="slot_2_de" value=""/>
        <input type="hidden" name="slot_2_details" id="slot_2_details" value=""/>
        <input type="hidden" name="slot_3" id="slot_3" value=""/>
        <input type="hidden" name="slot_3_de" id="slot_3_de" value=""/>
        <input type="hidden" name="slot_3_details" id="slot_3_details" value=""/>
        <input type="hidden" name="slot_4" id="slot_4" value=""/>
        <input type="hidden" name="slot_4_de" id="slot_4_de" value=""/>
        <input type="hidden" name="slot_4_details" id="slot_4_details" value=""/>
        <input type="hidden" name="slot_5" id="slot_5" value=""/>
        <input type="hidden" name="slot_5_de" id="slot_5_de" value=""/>
        <input type="hidden" name="slot_5_details" id="slot_5_details" value=""/>
        <input type="hidden" name="slot_6" id="slot_6" value=""/>
        <input type="hidden" name="slot_6_de" id="slot_6_de" value=""/>
        <input type="hidden" name="slot_6_details" id="slot_6_details" value=""/>
        <input type="hidden" name="slot_7" id="slot_7" value=""/>
        <input type="hidden" name="slot_7_de" id="slot_7_de" value=""/>
        <input type="hidden" name="slot_7_details" id="slot_7_details" value=""/>
        <input type="hidden" name="slot_8" id="slot_8" value=""/>
        <input type="hidden" name="slot_8_de" id="slot_8_de" value=""/>
        <input type="hidden" name="slot_8_details" id="slot_8_details" value=""/>
        <input type="hidden" name="slot_9" id="slot_9" value=""/>
        <input type="hidden" name="slot_9_de" id="slot_9_de" value=""/>
        <input type="hidden" name="slot_9_details" id="slot_9_details" value=""/>
        <input type="hidden" name="slot_10" id="slot_10" value=""/>
        <input type="hidden" name="slot_10_de" id="slot_10_de" value=""/>
        <input type="hidden" name="slot_10_details" id="slot_10_details" value=""/>
        <input type="hidden" name="slot_11" id="slot_11" value=""/>
        <input type="hidden" name="slot_11_de" id="slot_11_de" value=""/>
        <input type="hidden" name="slot_11_details" id="slot_11_details" value=""/>
        <input type="hidden" name="slot_12" id="slot_12" value=""/>
        <input type="hidden" name="slot_12_de" id="slot_12_de" value=""/>
        <input type="hidden" name="slot_12_details" id="slot_12_details" value=""/>
        <input type="hidden" name="slot_13" id="slot_13" value=""/>
        <input type="hidden" name="slot_13_de" id="slot_13_de" value=""/>
        <input type="hidden" name="slot_13_details" id="slot_13_details" value=""/>
        <input type="hidden" name="slot_14" id="slot_14" value=""/>
        <input type="hidden" name="slot_14_de" id="slot_14_de" value=""/>
        <input type="hidden" name="slot_14_details" id="slot_14_details" value=""/>
        <input type="hidden" name="slot_15" id="slot_15" value=""/>
        <input type="hidden" name="slot_15_de" id="slot_15_de" value=""/>
        <input type="hidden" name="slot_15_details" id="slot_15_details" value=""/>
        <input type="hidden" name="slot_16" id="slot_16" value=""/>
        <input type="hidden" name="slot_16_de" id="slot_16_de" value=""/>
        <input type="hidden" name="slot_16_details" id="slot_16_details" value=""/>
        <input type="hidden" name="slot_17" id="slot_17" value=""/>
        <input type="hidden" name="slot_17_de" id="slot_17_de" value=""/>
        <input type="hidden" name="slot_17_details" id="slot_17_details" value=""/>
        <input type="hidden" name="slot_18" id="slot_18" value=""/>
        <input type="hidden" name="slot_18_de" id="slot_18_de" value=""/>
        <input type="hidden" name="slot_18_details" id="slot_18_details" value=""/>
        <input type="hidden" name="slot_19" id="slot_19" value=""/>
        <input type="hidden" name="slot_19_de" id="slot_19_de" value=""/>
        <input type="hidden" name="slot_19_details" id="slot_19_details" value=""/>
        <input type="hidden" name="slot_20" id="slot_20" value=""/>
        <input type="hidden" name="slot_20_de" id="slot_20_de" value=""/>
        <input type="hidden" name="slot_20_details" id="slot_20_details" value=""/>
        <input type="hidden" name="slot_21" id="slot_21" value=""/>
        <input type="hidden" name="slot_21_de" id="slot_21_de" value=""/>
        <input type="hidden" name="slot_21_details" id="slot_21_details" value=""/>
        <input type="hidden" name="slot_22" id="slot_22" value=""/>
        <input type="hidden" name="slot_22_de" id="slot_22_de" value=""/>
        <input type="hidden" name="slot_22_details" id="slot_22_details" value=""/>
        <input type="hidden" name="slot_23" id="slot_23" value=""/>
        <input type="hidden" name="slot_23_de" id="slot_23_de" value=""/>
        <input type="hidden" name="slot_23_details" id="slot_23_details" value=""/>
        <input type="hidden" name="slot_24" id="slot_24" value=""/>
        <input type="hidden" name="slot_24_de" id="slot_24_de" value=""/>
        <input type="hidden" name="slot_24_details" id="slot_24_details" value=""/>
        <input type="hidden" name="slot_25" id="slot_25" value=""/>
        <input type="hidden" name="slot_25_de" id="slot_25_de" value=""/>
        <input type="hidden" name="slot_25_details" id="slot_25_details" value=""/>
        <input type="hidden" name="frame" id="frame" value="<?php echo $_GET['f_id'] ?>"/>
        <div id="hidden_values"></div>
        <div id="c-designer-btn-render-wrapper">
            <button class="btn btn-success btnuplodimg"><i class="glyphicon glyphicon-ok"></i> Generate the Image</button>
        </div>
    </form>
</div>
<!--Uploaded Images Div Ends-->