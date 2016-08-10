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
    <form action="save_frame_four.php" method="post">
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
        <input type="hidden" name="frame" id="frame" value="<?php echo $_GET['f_id'] ?>"/>
        <div id="hidden_values"></div>
        <div id="c-designer-btn-render-wrapper">
            <button class="btn btn-success btnuplodimg"><i class="glyphicon glyphicon-ok"></i> Generate the Image</button>
        </div>
    </form>
</div>
<!--Uploaded Images Div Ends-->