<?php

//  error_reporting(E_ALL);
//  echo "<pre>";
//  print_r($_POST);
//  echo "</pre>";exit;

include('../includes/connection.php');
require('../includes/class.php');
require('../includes/class-fontsize.php');
header('Content-Type: image/png');
$f_id = $_POST['frame'];
$frame_name = '../frames_orignal/' . $f_id . ".png";
$data = explode(',', $_POST['frame_id']);
$box1 = $_POST['slot_1_details'];
$box2 = $_POST['slot_2_details'];
$box3 = $_POST['slot_3_details'];
$box4 = $_POST['slot_4_details'];
$box5 = $_POST['slot_5_details'];
$box6 = $_POST['slot_6_details'];
$box7 = $_POST['slot_7_details'];
$box8 = $_POST['slot_8_details'];
$box9 = $_POST['slot_9_details'];
$box10 = $_POST['slot_10_details'];
$box11 = $_POST['slot_11_details'];
$box12 = $_POST['slot_12_details'];
//resize the image first start here
$query_temp1 = mysql_query('select image_name from frame_temp where image_name="' . $_POST['slot_1'] . '"');
$row_temp1 = mysql_fetch_array($query_temp1);
$query_box1 = mysql_query('select * from box_detail where box_id="' . $box1 . '"');
$row_box1 = mysql_fetch_array($query_box1);
$image_name1 = $row_temp1['image_name'];
$box_x1 = $row_box1['box_x'];
$box_y1 = $row_box1['box_y'];
$box_width1 = $row_box1['box_width'];
$box_height1 = $row_box1['box_height'];
// Get new sizes
$canvas = @imagecreatefrompng($frame_name);
$filename1 = '../frames_temp/' . $image_name1;
$image = new Resize_Image;
list($width1, $height1) = getimagesize($filename1);
if ($width1 < $height1) {
    $image->new_width = $box_width1 / 4;
} else {
    $image->new_height = $box_height1 / 4;
}
$image->image_to_resize = $filename1; // Full Path to the file
$image->ratio = true; // Keep Aspect Ratio?
$image->new_image_name = '1' . $image_name1;
$image->save_folder = '../frames_resize/';
$process = $image->resize();
if ($process['result'] && $image->save_folder) {
    $new_image1 = $process['new_file_path'];
    list($img_w1, $img_h1) = getimagesize($new_image1);
    $box1_width = intval($box_width1 / 4);
    $box1_height = intval($box_height1 / 4);
    if ($f_id == 53 && $img_w1 == $img_h1) {
        $newwidth = $img_w1 * 1.51;
        $newheight = $img_h1 * 1.51;
        // Load
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        $source = imagecreatefromjpeg($new_image1);
        // Resize
        imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $img_w1, $img_h1);
        // Output
        imagejpeg($thumb, '../frames_resize/' . $new_image1);
    } else if ($img_w1 < $box1_width) {
        $diff = $box1_width - $img_w1;
        $newwidth = $box_width1 / 4;
        $newheight = $img_h1 + ($diff / 4);
        // Load
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        $source = imagecreatefromjpeg($new_image1);
        // Resize
        imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $img_w1, $img_h1);
        // Output
        imagejpeg($thumb, '../frames_resize/' . $new_image1);
    } else if ($img_h1 < $box1_height) {
        $diff = $box1_height - $img_h1;
        $newheight = $box_height1 / 4;
        $newwidth = $img_w1 + ($diff / 4);
        // Load
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        $source = imagecreatefromjpeg($new_image1);
        // Resize
        imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $img_w1, $img_h1);
        // Output
        imagejpeg($thumb, '../frames_resize/' . $new_image1);
    }
}
//end resize first image
//--------------------------------------------------------------------------------------------------------------------------
//resize the image second start here
$query_temp2 = mysql_query('select image_name from frame_temp where image_name="' . $_POST['slot_2'] . '"');
$row_temp2 = mysql_fetch_array($query_temp2);
$query_box2 = mysql_query('select * from box_detail where box_id="' . $box2 . '"');
$row_box2 = mysql_fetch_array($query_box2);
$image_name2 = $row_temp2['image_name'];
$box_x2 = $row_box2['box_x'];
$box_y2 = $row_box2['box_y'];
$box_width2 = $row_box2['box_width'];
$box_height2 = $row_box2['box_height'];
// Get new sizes
$filename2 = '../frames_temp/' . $image_name2;
$image = new Resize_Image;
list($width2, $height2) = getimagesize($filename2);
if ($width2 < $height2) {
    $image->new_width = $box_width2 / 4;
} else {
    $image->new_height = $box_height2 / 4;
}
$image->image_to_resize = $filename2; // Full Path to the file
$image->ratio = true; // Keep Aspect Ratio?
$image->new_image_name = "2" . $image_name2;
$image->save_folder = '../frames_resize/';
$process = $image->resize();
if ($process['result'] && $image->save_folder) {
    $new_image2 = $process['new_file_path'];
    list($img_w2, $img_h2) = getimagesize($new_image2);
    $box2_width = intval($box_width2 / 4);
    $box2_height = intval($box_height2 / 4);
    if ($f_id == 53 && $img_w2 == $img_h2) {
        $newwidth = $img_w2 * 1.51;
        $newheight = $img_h2 * 1.51;
        // Load
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        $source = imagecreatefromjpeg($new_image2);
        // Resize
        imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $img_w2, $img_h2);
        // Output
        imagejpeg($thumb, '../frames_resize/' . $new_image2);
    } else if ($img_w2 < $box2_width) {
        $diff = $box2_width - $img_w2;
        $newwidth = $box_width2 / 4;
        $newheight = $img_h2 + ($diff / 4);
        // Load
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        $source = imagecreatefromjpeg($new_image2);
        // Resize
        imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $img_w2, $img_h2);
        // Output
        imagejpeg($thumb, '../frames_resize/' . $new_image2);
    } else if ($img_h2 < $box2_height) {
        $diff = $box2_height - $img_h2;
        $newheight = $box_height2 / 4;
        $newwidth = $img_w2 + ($diff / 4);
        // Load
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        $source = imagecreatefromjpeg($new_image2);
        // Resize
        imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $img_w2, $img_h2);
        // Output
        imagejpeg($thumb, '../frames_resize/' . $new_image2);
    }
}
//end resize second image
//--------------------------------------------------------------------------------------------------------------------------
//resize the image third start here
$query_temp3 = mysql_query('select image_name from frame_temp where image_name="' . $_POST['slot_3'] . '"');
$row_temp3 = mysql_fetch_array($query_temp3);
$query_box3 = mysql_query('select * from box_detail where box_id="' . $box3 . '"');
$row_box3 = mysql_fetch_array($query_box3);
$image_name3 = $row_temp3['image_name'];
$box_x3 = $row_box3['box_x'];
$box_y3 = $row_box3['box_y'];
$box_width3 = $row_box3['box_width'];
$box_height3 = $row_box3['box_height'];
// Get new sizes
$filename3 = '../frames_temp/' . $image_name3;
$image = new Resize_Image;
list($width3, $height3) = getimagesize($filename3);
if ($width3 < $height3) {
    $image->new_width = $box_width3 / 4;
} else {
    $image->new_height = $box_height3 / 4;
}
$image->image_to_resize = $filename3; // Full Path to the file
$image->ratio = true; // Keep Aspect Ratio?
$image->new_image_name = '3' . $image_name3;
$image->save_folder = '../frames_resize/';
$process = $image->resize();
if ($process['result'] && $image->save_folder) {
    $new_image3 = $process['new_file_path'];
    list($img_w3, $img_h3) = getimagesize($new_image3);
    $box3_width = intval($box_width3 / 4);
    $box3_height = intval($box_height3 / 4);
    if ($f_id == 54 && $img_w3 == $img_h3) {
        $newwidth 	= $img_w3 * 1.4;
        $newheight 	= $img_h3 * 1.4;
        // Load
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        $source = imagecreatefromjpeg($new_image3);
        // Resize
        imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $img_w3, $img_h3);
        // Output
        imagejpeg($thumb, '../frames_resize/' . $new_image3);
    }
   else if ($img_w3 < $box3_width) {
        $diff = $box3_width - $img_w3;
        $newwidth = $box_width3 / 4;
        $newheight = $img_h3 + ($diff / 4);
        // Load
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        $source = imagecreatefromjpeg($new_image3);
        // Resize
        imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $img_w3, $img_h3);
        // Output
        imagejpeg($thumb, '../frames_resize/' . $new_image3);
    } else if ($img_h3 < $box3_height) {
        $diff = $box3_height - $img_h3;
        $newheight = $box_height3 / 4;
        $newwidth = $img_w3 + ($diff / 4);
        // Load
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        $source = imagecreatefromjpeg($new_image3);
        // Resize
        imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $img_w3, $img_h3);
        // Output
        imagejpeg($thumb, '../frames_resize/' . $new_image3);
    }
}
//end resize third image
//---------------------------------------------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------------------------------------
//resize the image fourth start here
$query_temp4 = mysql_query('select image_name from frame_temp where image_name="' . $_POST['slot_4'] . '"');
$row_temp4 = mysql_fetch_array($query_temp4);
$query_box4 = mysql_query('select * from box_detail where box_id="' . $box4 . '"');
$row_box4 = mysql_fetch_array($query_box4);
$image_name4 = $row_temp4['image_name'];
$box_x4 = $row_box4['box_x'];
$box_y4 = $row_box4['box_y'];
$box_width4 = $row_box4['box_width'];
$box_height4 = $row_box4['box_height'];
// Get new sizes
$filename4 = '../frames_temp/' . $image_name4;
$image = new Resize_Image;
list($width4, $height4) = getimagesize($filename4);
if ($width4 < $height4) {
    $image->new_width = $box_width4 / 4;
} else {
    $image->new_height = $box_height4 / 4;
}
$image->image_to_resize = $filename4; // Full Path to the file
$image->ratio = true; // Keep Aspect Ratio?
$image->new_image_name = '4' . $image_name4;
$image->save_folder = '../frames_resize/';
$process = $image->resize();
if ($process['result'] && $image->save_folder) {
    $new_image4 = $process['new_file_path'];
    list($img_w4, $img_h4) = getimagesize($new_image4);
    $box4_width = intval($box_width4 / 4);
    $box4_height = intval($box_height4 / 4);
     if ($f_id == 54 && $img_w4 == $img_h4) {
        $newwidth = $img_w4 * 1.4;
        $newheight = $img_h4 * 1.4;
        // Load
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        $source = imagecreatefromjpeg($new_image4);
        // Resize
        imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $img_w4, $img_h4);
        // Output
        imagejpeg($thumb, '../frames_resize/' . $new_image4);
    } 
    else if ($img_w4 < $box4_width) {
        $diff = $box4_width - $img_w4;
        $newwidth = $box_width4 / 4;
        $newheight = $img_h4 + ($diff / 4);
        // Load
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        $source = imagecreatefromjpeg($new_image4);
        // Resize
        imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $img_w4, $img_h4);
        // Output
        imagejpeg($thumb, '../frames_resize/' . $new_image4);
    } else if ($img_h4 < $box4_height) {
        $diff = $box4_height - $img_h4;
        $newheight = $box_height4 / 4;
        $newwidth = $img_w4 + ($diff / 4);
        // Load
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        $source = imagecreatefromjpeg($new_image4);
        // Resize
        imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $img_w4, $img_h4);
        // Output
        imagejpeg($thumb, '../frames_resize/' . $new_image4);
    }
}//end resize FOURTH image
//---------------------------------------------------------------------------------------------------------------------------------
//resize the image FIFTH start here
$query_temp5 = mysql_query('select image_name from frame_temp where image_name="' . $_POST['slot_5'] . '"');
$row_temp5 = mysql_fetch_array($query_temp5);
$query_box5 = mysql_query('select * from box_detail where box_id="' . $box5 . '"');
$row_box5 = mysql_fetch_array($query_box5);
$image_name5 = $row_temp5['image_name'];
$box_x5 = $row_box5['box_x'];
$box_y5 = $row_box5['box_y'];
$box_width5 = $row_box5['box_width'];
$box_height5 = $row_box5['box_height'];
// Get new sizes
$filename5 = '../frames_temp/' . $image_name5;
$image = new Resize_Image;
list($width5, $height5) = getimagesize($filename5);
if ($width5 < $height5) {
    $image->new_width = $box_width5 / 4;
} else {
    $image->new_height = $box_height5 / 4;
}
$image->image_to_resize = $filename5; // Full Path to the file
$image->ratio = true; // Keep Aspect Ratio?
$image->new_image_name = '5' . $image_name5;
$image->save_folder = '../frames_resize/';
$process = $image->resize();
if ($process['result'] && $image->save_folder) {
    $new_image5 = $process['new_file_path'];
    list($img_w5, $img_h5) = getimagesize($new_image5);
    $box5_width = intval($box_width5 / 4);
    $box5_height = intval($box_height5 / 4);
    if ($f_id == 53 && $img_w5 == $img_h5) {

        $newwidth = $img_w5 * 1.51;
        $newheight = $img_h5 * 1.51;
        // Load
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        $source = imagecreatefromjpeg($new_image5);
        // Resize
        imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $img_w5, $img_h5);
        // Output
        imagejpeg($thumb, '../frames_resize/' . $new_image5);
    }else if ($f_id == 54 && $img_w5 == $img_h5) {

        $newwidth = $img_w5 * 1.4;
        $newheight = $img_h5 * 1.4;
        // Load
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        $source = imagecreatefromjpeg($new_image5);
        // Resize
        imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $img_w5, $img_h5);
        // Output
        imagejpeg($thumb, '../frames_resize/' . $new_image5);
    } else if ($img_w5 < $box5_width) {
        $diff = $box5_width - $img_w5;
        $newwidth = $box_width5 / 4;
        $newheight = $img_h5 + ($diff / 4);
        // Load
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        $source = imagecreatefromjpeg($new_image5);
        // Resize
        imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $img_w5, $img_h5);
        // Output
        imagejpeg($thumb, '../frames_resize/' . $new_image5);
    } else if ($img_h5 < $box5_height) {
        $diff = $box5_height - $img_h5;
        $newheight = $box_height5 / 4;
        $newwidth = $img_w5 + ($diff / 4);
        // Load
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        $source = imagecreatefromjpeg($new_image5);
        // Resize
        imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $img_w5, $img_h5);
        // Output
        imagejpeg($thumb, '../frames_resize/' . $new_image5);
    }
}//end resize FIFTH image
//---------------------------------------------------------------------------------------------------------------------------------
//resize the image SIXTH start here
$query_temp6 = mysql_query('select image_name from frame_temp where image_name="' . $_POST['slot_6'] . '"');
$row_temp6 = mysql_fetch_array($query_temp6);
$query_box6 = mysql_query('select * from box_detail where box_id="' . $box6 . '"');
$row_box6 = mysql_fetch_array($query_box6);
$image_name6 = $row_temp6['image_name'];
$box_x6 = $row_box6['box_x'];
$box_y6 = $row_box6['box_y'];
$box_width6 = $row_box6['box_width'];
$box_height6 = $row_box6['box_height'];
// Get new sizes
$filename6 = '../frames_temp/' . $image_name6;
$image = new Resize_Image;
list($width6, $height6) = getimagesize($filename6);
if ($width6 < $height6) {
    $image->new_width = $box_width6 / 4;
} else {
    $image->new_height = $box_height6 / 4;
}
$image->image_to_resize = $filename6; // Full Path to the file
$image->ratio = true; // Keep Aspect Ratio?
$image->new_image_name = '6' . $image_name6;
$image->save_folder = '../frames_resize/';
$process = $image->resize();
if ($process['result'] && $image->save_folder) {
    $new_image6 = $process['new_file_path'];
    list($img_w6, $img_h6) = getimagesize($new_image6);
    $box6_width = intval($box_width6 / 4);
    $box6_height = intval($box_height6 / 4);
    if ($img_w6 < $box6_width) {
        $diff = $box6_width - $img_w6;
        $newwidth = $box_width6 / 4;
        $newheight = $img_h6 + ($diff / 4);
        // Load
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        $source = imagecreatefromjpeg($new_image6);
        // Resize
        imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $img_w6, $img_h6);
        // Output
        imagejpeg($thumb, '../frames_resize/' . $new_image6);
    } else if ($img_h6 < $box6_height) {
        $diff = $box6_height - $img_h6;
        $newheight = $box_height6 / 4;
        $newwidth = $img_w6 + ($diff / 4);
        // Load
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        $source = imagecreatefromjpeg($new_image6);
        // Resize
        imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $img_w6, $img_h6);
        // Output
        imagejpeg($thumb, '../frames_resize/' . $new_image6);
    }
}//end resize SIXTH image
//---------------------------------------------------------------------------------------------------------------------------------
//resize the image SEVENTH start here
$query_temp7 = mysql_query('select image_name from frame_temp where image_name="' . $_POST['slot_7'] . '"');
$row_temp7 = mysql_fetch_array($query_temp7);
$query_box7 = mysql_query('select * from box_detail where box_id="' . $box7 . '"');
$row_box7 = mysql_fetch_array($query_box7);
$image_name7 = $row_temp7['image_name'];
$box_x7 = $row_box7['box_x'];
$box_y7 = $row_box7['box_y'];
$box_width7 = $row_box7['box_width'];
$box_height7 = $row_box7['box_height'];
// Get new sizes
$filename7 = '../frames_temp/' . $image_name7;
$image = new Resize_Image;
list($width7, $height7) = getimagesize($filename7);
if ($width7 < $height7) {
    $image->new_width = $box_width7 / 4;
} else {
    $image->new_height = $box_height7 / 4;
}
$image->image_to_resize = $filename7; // Full Path to the file
$image->ratio = true; // Keep Aspect Ratio?
$image->new_image_name = '7' . $image_name7;
$image->save_folder = '../frames_resize/';
$process = $image->resize();
if ($process['result'] && $image->save_folder) {
    $new_image7 = $process['new_file_path'];
    list($img_w7, $img_h7) = getimagesize($new_image7);
    $box7_width = intval($box_width7 / 4);
    $box7_height = intval($box_height7 / 4);
    if ($img_w7 < $box7_width) {
        $diff = $box7_width - $img_w7;
        $newwidth = $box_width7 / 4;
        $newheight = $img_h7 + ($diff / 4);
        // Load
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        $source = imagecreatefromjpeg($new_image7);
        // Resize
        imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $img_w7, $img_h7);
        // Output
        imagejpeg($thumb, '../frames_resize/' . $new_image7);
    } else if ($img_h7 < $box7_height) {
        $diff = $box7_height - $img_h7;
        $newheight = $box_height7 / 4;
        $newwidth = $img_w7 + ($diff / 4);
        // Load
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        $source = imagecreatefromjpeg($new_image7);
        // Resize
        imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $img_w7, $img_h7);
        // Output
        imagejpeg($thumb, '../frames_resize/' . $new_image7);
    }
}//end resize SEVENTH image
//---------------------------------------------------------------------------------------------------------------------------------
//resize the image EIGHTH start here
$query_temp8 = mysql_query('select image_name from frame_temp where image_name="' . $_POST['slot_8'] . '"');
$row_temp8 = mysql_fetch_array($query_temp8);
$query_box8 = mysql_query('select * from box_detail where box_id="' . $box8 . '"');
$row_box8 = mysql_fetch_array($query_box8);
$image_name8 = $row_temp8['image_name'];
$box_x8 = $row_box8['box_x'];
$box_y8 = $row_box8['box_y'];
$box_width8 = $row_box8['box_width'];
$box_height8 = $row_box8['box_height'];
// Get new sizes
$filename8 = '../frames_temp/' . $image_name8;
$image = new Resize_Image;
list($width8, $height8) = getimagesize($filename8);
if ($width8 < $height8) {
    $image->new_width = $box_width8 / 4;
} else {
    $image->new_height = $box_height8 / 4;
}
$image->image_to_resize = $filename8; // Full Path to the file
$image->ratio = true; // Keep Aspect Ratio?
$image->new_image_name = '8' . $image_name8;
$image->save_folder = '../frames_resize/';
$process = $image->resize();
if ($process['result'] && $image->save_folder) {
    $new_image8 = $process['new_file_path'];
    list($img_w8, $img_h8) = getimagesize($new_image8);
    $box8_width = intval($box_width8 / 4);
    $box8_height = intval($box_height8 / 4);
    if ($f_id == 53 && $img_w8 == $img_h8) {
        $newwidth = $img_w8 * 1.51;
        $newheight = $img_h8 * 1.51;
        // Load
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        $source = imagecreatefromjpeg($new_image8);
        // Resize
        imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $img_w8, $img_h8);
        // Output
        imagejpeg($thumb, '../frames_resize/' . $new_image8);
    }else if ($f_id == 54 && $img_w8 == $img_h8) {
        $newwidth = $img_w8 * 1.4;
        $newheight = $img_h8 * 1.4;
        // Load
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        $source = imagecreatefromjpeg($new_image8);
        // Resize
        imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $img_w8, $img_h8);
        // Output
        imagejpeg($thumb, '../frames_resize/' . $new_image8);
    } else if ($img_w8 < $box8_width) {
        $diff = $box8_width - $img_w8;
        $newwidth = $box_width8 / 4;
        $newheight = $img_h8 + ($diff / 4);
        // Load
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        $source = imagecreatefromjpeg($new_image8);
        // Resize
        imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $img_w8, $img_h8);
        // Output
        imagejpeg($thumb, '../frames_resize/' . $new_image8);
    } else if ($img_h8 < $box8_height) {
        $diff = $box8_height - $img_h8;
        $newheight = $box_height1 / 4;
        $newwidth = $img_w8 + ($diff / 4);
        // Load
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        $source = imagecreatefromjpeg($new_image8);
        // Resize
        imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $img_w8, $img_h8);
        // Output
        imagejpeg($thumb, '../frames_resize/' . $new_image8);
    }
}//end resize EIGHTH image
//---------------------------------------------------------------------------------------------------------------------------------
//resize the image NINE start here
$query_temp9 = mysql_query('select image_name from frame_temp where image_name="' . $_POST['slot_9'] . '"');
$row_temp9 = mysql_fetch_array($query_temp9);
$query_box9 = mysql_query('select * from box_detail where box_id="' . $box9 . '"');
$row_box9 = mysql_fetch_array($query_box9);
$image_name9 = $row_temp9['image_name'];
$box_x9 = $row_box9['box_x'];
$box_y9 = $row_box9['box_y'];
$box_width9 = $row_box9['box_width'];
$box_height9 = $row_box9['box_height'];
// Get new sizes
$filename9 = '../frames_temp/' . $image_name9;
$image = new Resize_Image;
list($width9, $height9) = getimagesize($filename9);
if ($width9 < $height9) {
    $image->new_width = $box_width9 / 4;
} else {
    $image->new_height = $box_height9 / 4;
}
$image->image_to_resize = $filename9; // Full Path to the file
$image->ratio = true; // Keep Aspect Ratio?
$image->new_image_name = '9' . $image_name9;
$image->save_folder = '../frames_resize/';
$process = $image->resize();
if ($process['result'] && $image->save_folder) {
    $new_image9 = $process['new_file_path'];
    list($img_w9, $img_h9) = getimagesize($new_image9);
    $box9_width = intval($box_width9 / 4);
    $box9_height = intval($box_height9 / 4);
    if ($f_id == 54 && $img_w9 == $img_h9) {
        $newwidth = $img_w9 * 1.4;
        $newheight = $img_h9 * 1.4;
        // Load
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        $source = imagecreatefromjpeg($new_image9);
        // Resize
        imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $img_w9, $img_h9);
        // Output
        imagejpeg($thumb, '../frames_resize/' . $new_image9);
    }
    else if ($img_w9 < $box9_width) {
        $diff = $box9_width - $img_w9;
        $newwidth = $box_width9 / 4;
        $newheight = $img_h9 + ($diff / 4);
        // Load
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        $source = imagecreatefromjpeg($new_image9);
        // Resize
        imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $img_w9, $img_h9);
        // Output
        imagejpeg($thumb, '../frames_resize/' . $new_image9);
    }  else if ($img_h9 < $box9_height) {
        $diff = $box9_height - $img_h9;
        $newheight = $box_height9 / 4;
        $newwidth = $img_w9 + ($diff / 4);
        // Load
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        $source = imagecreatefromjpeg($new_image9);
        // Resize
        imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $img_w9, $img_h9);
        // Output
        imagejpeg($thumb, '../frames_resize/' . $new_image9);
    }
}//end resize NINE image
//---------------------------------------------------------------------------------------------------------------------------------
//resize the image TEN start here
$query_temp10 = mysql_query('select image_name from frame_temp where image_name="' . $_POST['slot_10'] . '"');
$row_temp10 = mysql_fetch_array($query_temp10);
$query_box10 = mysql_query('select * from box_detail where box_id="' . $box10 . '"');
$row_box10 = mysql_fetch_array($query_box10);
$image_name10 = $row_temp10['image_name'];
$box_x10 = $row_box10['box_x'];
$box_y10 = $row_box10['box_y'];
$box_width10 = $row_box10['box_width'];
$box_height10 = $row_box10['box_height'];
// Get new sizes
$filename10 = '../frames_temp/' . $image_name10;
$image = new Resize_Image;
list($width10, $height10) = getimagesize($filename10);
if ($width10 < $height10) {
    $image->new_width = $box_width10 / 4;
} else {
    $image->new_height = $box_height10 / 4;
}
$image->image_to_resize = $filename10; // Full Path to the file
$image->ratio = true; // Keep Aspect Ratio?
$image->new_image_name = '10' . $image_name10;
$image->save_folder = '../frames_resize/';
$process = $image->resize();
if ($process['result'] && $image->save_folder) {
    $new_image10 = $process['new_file_path'];
    list($img_w10, $img_h10) = getimagesize($new_image10);
    $box10_width = intval($box_width10 / 4);
    $box10_height = intval($box_height10 / 4);
   if ($f_id == 54 && $img_w10 == $img_h10) {
        $newwidth 	= $img_w10 * 1.4;
        $newheight 	= $img_h10 * 1.4;
        // Load
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        $source = imagecreatefromjpeg($new_image10);
        // Resize
        imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $img_w10, $img_h10);
        // Output
        imagejpeg($thumb, '../frames_resize/' . $new_image10);
    } 
    else if ($img_w10 < $box10_width) {
        $diff = $box10_width - $img_w10;
        $newwidth = $box_width10 / 4;
        $newheight = $img_h10 + ($diff / 4);
        // Load
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        $source = imagecreatefromjpeg($new_image10);
        // Resize
        imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $img_w10, $img_h10);
        // Output
        imagejpeg($thumb, '../frames_resize/' . $new_image10);
    } else if ($img_h10 < $box10_height) {
        $diff = $box10_height - $img_h10;
        $newheight = $box_height10 / 4;
        $newwidth = $img_w10 + ($diff / 4);
        // Load
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        $source = imagecreatefromjpeg($new_image10);
        // Resize
        imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $img_w10, $img_h10);
        // Output
        imagejpeg($thumb, '../frames_resize/' . $new_image10);
    }
}//end resize TEN image
//resize the image eleven start here
$query_temp11 = mysql_query('select image_name from frame_temp where image_name="' . $_POST['slot_11'] . '"');
$row_temp11 = mysql_fetch_array($query_temp11);
$query_box11 = mysql_query('select * from box_detail where box_id="' . $box11 . '"');
$row_box11 = mysql_fetch_array($query_box11);
$image_name11 = $row_temp11['image_name'];
$box_x11 = $row_box11['box_x'];
$box_y11 = $row_box11['box_y'];
$box_width11 = $row_box11['box_width'];
$box_height11 = $row_box11['box_height'];
// Get new sizes
$filename11 = '../frames_temp/' . $image_name11;
$image = new Resize_Image;
list($width11, $height11) = getimagesize($filename11);
if ($width11 < $height11) {
    $image->new_width = $box_width11 / 4;
} else {
    $image->new_height = $box_height11 / 4;
}
$image->image_to_resize = $filename11; // Full Path to the file
$image->ratio = true; // Keep Aspect Ratio?
$image->new_image_name = '11' . $image_name11;
$image->save_folder = '../frames_resize/';
$process = $image->resize();
if ($process['result'] && $image->save_folder) {
    $new_image11 = $process['new_file_path'];
    list($img_w11, $img_h11) = getimagesize($new_image11);
    $box11_width = intval($box_width11 / 4);
    $box11_height = intval($box_height11 / 4);
    if ($f_id == 53 && $img_w11 == $img_h11) {
        $newwidth = $img_w11 * 1.51;
        $newheight = $img_h11 * 1.51;
        // Load
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        $source = imagecreatefromjpeg($new_image11);
        // Resize
        imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $img_w11, $img_h11);
        // Output
        imagejpeg($thumb, '../frames_resize/' . $new_image11);
    } else if ($img_w11 < $box11_width) {
        $diff = $box11_width - $img_w11;
        $newwidth = $box_width11 / 4;
        $newheight = $img_h11 + ($diff / 4);
        // Load
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        $source = imagecreatefromjpeg($new_image11);
        // Resize
        imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $img_w11, $img_h11);
        // Output
        imagejpeg($thumb, '../frames_resize/' . $new_image11);
    } else if ($img_h1 < $box11_height) {
        $diff = $box11_height - $img_h11;
        $newheight = $box_height11 / 4;
        $newwidth = $img_w11 + ($diff / 4);
        // Load
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        $source = imagecreatefromjpeg($new_image11);
        // Resize
        imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $img_w11, $img_h11);
        // Output
        imagejpeg($thumb, '../frames_resize/' . $new_image11);
    }
}//end resize elven image
//resize the image eleven start here
$query_temp12 = mysql_query('select image_name from frame_temp where image_name="' . $_POST['slot_12'] . '"');
$row_temp12 = mysql_fetch_array($query_temp12);
$query_box12 = mysql_query('select * from box_detail where box_id="' . $box12 . '"');
$row_box12 = mysql_fetch_array($query_box12);
$image_name12 = $row_temp12['image_name'];
$box_x12 = $row_box12['box_x'];
$box_y12 = $row_box12['box_y'];
$box_width12 = $row_box12['box_width'];
$box_height12 = $row_box12['box_height'];
// Get new sizes
$filename12 = '../frames_temp/' . $image_name12;
$image = new Resize_Image;
list($width12, $height12) = getimagesize($filename12);
if ($width12 < $height12) {
    $image->new_width = $box_width12 / 4;
} else {
    $image->new_height = $box_height12 / 4;
}
$image->image_to_resize = $filename12; // Full Path to the file
$image->ratio = true; // Keep Aspect Ratio?
$image->new_image_name = '12' . $image_name12;
$image->save_folder = '../frames_resize/';
$process = $image->resize();
if ($process['result'] && $image->save_folder) {
    $new_image12 = $process['new_file_path'];
    list($img_w12, $img_h12) = getimagesize($new_image12);
    $box12_width = intval($box_width12 / 4);
    $box12_height = intval($box_height12 / 4);
    if ($f_id == 53 && $img_w12 == $img_h12) {
        $newwidth = $img_w12 * 1.51;
        $newheight = $img_h12 * 1.51;
        // Load
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        $source = imagecreatefromjpeg($new_image12);
        // Resize
        imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $img_w12, $img_h12);
        // Output
        imagejpeg($thumb, '../frames_resize/' . $new_image12);
    } else if ($img_w12 < $box12_width) {
        $diff = $box12_width - $img_w12;
        $newwidth = $box_width12 / 4;
        $newheight = $img_h12 + ($diff / 4);
        // Load
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        $source = imagecreatefromjpeg($new_image12);
        // Resize
        imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $img_w12, $img_h12);
        // Output
        imagejpeg($thumb, '../frames_resize/' . $new_image12);
    } else if ($img_h1 < $box12_height) {
        $diff = $box12_height - $img_h12;
        $newheight = $box_height12 / 4;
        $newwidth = $img_w12 + ($diff / 4);
        // Load
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        $source = imagecreatefromjpeg($new_image12);
        // Resize
        imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $img_w12, $img_h12);
        // Output
        imagejpeg($thumb, '../frames_resize/' . $new_image12);
    }
}//end resize elven image
//---------------------------------------------------------------------------------------------------------------------------------
//finally save file
$icon1 = imagecreatefromjpeg($new_image1);
$icon2 = imagecreatefromjpeg($new_image2);
$icon3 = imagecreatefromjpeg($new_image3);
$icon4 = imagecreatefromjpeg($new_image4);
$icon5 = imagecreatefromjpeg($new_image5);
$icon6 = imagecreatefromjpeg($new_image6);
$icon7 = imagecreatefromjpeg($new_image7);
$icon8 = imagecreatefromjpeg($new_image8);
$icon9 = imagecreatefromjpeg($new_image9);
$icon10 = imagecreatefromjpeg($new_image10);
$icon11 = imagecreatefromjpeg($new_image11);
$icon12 = imagecreatefromjpeg($new_image12);
// ... add more source images as needed
//Frame 53 Starts
if ($f_id == '53') {
    if (isset($_POST['slot_1_de']) && ($_POST['slot_1_de'] != "")) {
        $slot_1_de = explode("_", $_POST['slot_1_de']);
        $pos_w1 = $slot_1_de[0];
        $pos_h1 = $slot_1_de[2];
        if ($pos_w1 > ($pos_w1 / 2)) {
            list($image_w1, $image_h1) = getimagesize($new_image1);
            if ($image_h1 == $image_w1) {
                $pos_w1 = $slot_1_de[0] * 3.9;
            }
            //width greater
            if ($image_h1 < $image_w1) {
                $pos_w1 = $slot_1_de[0] * 1;
            }
        }
        //height
        if ($pos_h1 > ($pos_h1 / 2)) {
            list($image_w1, $image_h1) = getimagesize($new_image1);
            //graeter
            if ($image_h1 > $image_w1) {
                $pos_h1 = $pos_h1 * 1.56;
            }
            //equal
            if ($image_h1 == $image_w1) {

                $pos_h1 = $pos_h1 * 1;
            }
        }
    } else {
        list($image_w1, $image_h1) = getimagesize($new_image1);
        if ($image_h1 > $image_w1) {
            $pos_w1 = 0;
            $pos_h1 = 190;
        } else if ($image_w1 > $image_h1) {
            $pos_h1 = 0;
            $pos_w1 = 0;
        } else if ($image_w1 == $image_h1) {
            $pos_h1 = 75;
            $pos_w1 = 0;
        }
    }
    if (isset($_POST['slot_2_de']) && ($_POST['slot_2_de'] != "")) {
        $slot_2_de = explode("_", $_POST['slot_2_de']);
        $pos_w2 = $slot_2_de[0];
        $pos_h2 = $slot_2_de[2];
        if ($pos_w2 > ($pos_w2 / 2)) {
            list($image_w2, $image_h2) = getimagesize($new_image2);
            if ($image_h2 == $image_w2) {
                $pos_w2 = $slot_2_de[0] * 3.9;
            }
            //width greater
            if ($image_h2 < $image_w2) {
                $pos_w2 = $slot_2_de[0] * 1;
            }
        }
        //height
        if ($pos_h2 > ($pos_h2 / 2)) {
            list($image_w2, $image_h2) = getimagesize($new_image2);
            //graeter
            if ($image_h2 > $image_w2) {
                $pos_h2 = $pos_h2 * 1.56;
            }
            //equal
            if ($image_h2 == $image_w2) {
                $pos_h2 = $pos_h2 * 1;
            }
        }
    } else {
        list($image_w2, $image_h2) = getimagesize($new_image2);
        if ($image_h2 > $image_w2) {
            $pos_w2 = 0;
            $pos_h2 = 190;
        } else if ($image_w2 > $image_h2) {
            $pos_h2 = 0;
            $pos_w2 = 0;
        } else if ($image_w2 == $image_h2) {
            $pos_h2 = 75;
            $pos_w2 = 0;
        }
    }
    if (isset($_POST['slot_3_de']) && ($_POST['slot_3_de'] != "")) {
        $slot_3_de = explode("_", $_POST['slot_3_de']);
        $pos_w3 = $slot_3_de[0];
        $pos_h3 = $slot_3_de[2];
        if ($pos_w3 > ($pos_w3 / 2)) {
            list($image_w3, $image_h3) = getimagesize($new_image3);
            if ($image_h3 == $image_w3) {
                $pos_w3 = $slot_3_de[0] * 0.65;
            }
            //width greater
            if ($image_h3 < $image_w3) {
                $pos_w3 = $slot_3_de[0] * 0.68;
            }
        }
        //height
        if ($pos_h3 > ($pos_h3 / 2)) {
            list($image_w3, $image_h3) = getimagesize($new_image3);
            //graeter
            if ($image_h3 > $image_w3) {
                $pos_h3 = $pos_h3 * 0.65;
            }
            //equal
            if ($image_h3 == $image_w3) {
                $pos_h3 = $pos_h3 * 1;
            }
        }
    } else {
        list($image_w3, $image_h3) = getimagesize($new_image3);
        if ($image_h3 > $image_w3) {
            $pos_w3 = 0;
            $pos_h3 = 10;
        } else if ($image_w3 > $image_h3) {
            $pos_h3 = 0;
            $pos_w3 = 120;
        } else if ($image_w3 == $image_h3) {
            $pos_h3 = 0;
            $pos_w3 = 50;
        }
    }
    if (isset($_POST['slot_4_de']) && ($_POST['slot_4_de'] != "")) {
        $slot_4_de = explode("_", $_POST['slot_4_de']);
        $pos_w4 = $slot_4_de[0];
        $pos_h4 = $slot_4_de[2];
        if ($pos_w4 > ($pos_w4 / 2)) {
            list($image_w4, $image_h4) = getimagesize($new_image4);
            if ($image_h4 == $image_w4) {
                $pos_w4 = $slot_4_de[0] * 0.65;
            }
            //width greater
            if ($image_h4 < $image_w4) {
                $pos_w4 = $slot_4_de[0] * 0.68;
            }
        }
        //height
        if ($pos_h4 > ($pos_h4 / 2)) {
            list($image_w4, $image_h4) = getimagesize($new_image4);
            //graeter
            if ($image_h4 > $image_w4) {
                $pos_h4 = $pos_h4 * 0.65;
            }
            //equal
            if ($image_h4 == $image_w4) {
                $pos_h4 = $pos_h4 * 1;
            }
        }
    } else {
        list($image_w4, $image_h4) = getimagesize($new_image4);
        if ($image_h4 > $image_w4) {
            $pos_w4 = 0;
            $pos_h4 = 0;
        } else if ($image_w4 > $image_h4) {
            $pos_h4 = 0;
            $pos_w4 = 120;
        } else if ($image_w4 == $image_h4) {
            $pos_h4 = 0;
            $pos_w4 = 50;
        }
    }
    if (isset($_POST['slot_5_de']) && ($_POST['slot_5_de'] != "")) {
        $slot_5_de = explode("_", $_POST['slot_5_de']);
        $pos_w5 = $slot_5_de[0];
        $pos_h5 = $slot_5_de[2];
        if ($pos_w5 > ($pos_w5 / 2)) {
            list($image_w5, $image_h5) = getimagesize($new_image5);
            if ($image_h5 == $image_w5) {
                $pos_w5 = $slot_5_de[0] * 1.25;
            }
            //width greater
            if ($image_h5 < $image_w5) {
                $pos_w5 = $slot_5_de[0] * 1.32;
            }
        }
        //height
        if ($pos_h5 > ($pos_h5 / 2)) {
            list($image_w5, $image_h5) = getimagesize($new_image5);
            //graeter
            if ($image_h5 > $image_w5) {

                $pos_h5 = $pos_h5 * 1.56;
            }
            //equal
            if ($image_h5 == $image_w5) {
                $pos_h5 = $pos_h5 - $pos_h5;
            }
        }
    } else {
        list($image_w5, $image_h5) = getimagesize($new_image5);
        if ($image_h5 > $image_w5) {
            $pos_w5 = 0;
            $pos_h5 = 190;
        } else if ($image_w5 > $image_h5) {
            $pos_h5 = 0;
            $pos_w5 = 0;
        } else if ($image_w5 == $image_h5) {
            $pos_h5 = 75;
            $pos_w5 = 0;
        }
    }
    if (isset($_POST['slot_6_de']) && ($_POST['slot_6_de'] != "")) {
        $slot_6_de = explode("_", $_POST['slot_6_de']);
        $pos_w6 = $slot_6_de[0];
        $pos_h6 = $slot_6_de[2];
        if ($pos_w6 > ($pos_w6 / 2)) {
            list($image_w6, $image_h6) = getimagesize($new_image6);
            if ($image_h6 == $image_w6) {
                $pos_w6 = $slot_6_de[0] * 1.25;
            }
            //width greater
            if ($image_h6 < $image_w6) {
                $pos_w6 = $slot_6_de[0] * 1.32;
            }
        }
        //height
        if ($pos_h6 > ($pos_h6 / 2)) {
            list($image_w6, $image_h6) = getimagesize($new_image6);
            //graeter
            if ($image_h6 > $image_w6) {
                $pos_h6 = $pos_h6 * 1.85;
            }
            //equal
            if ($image_h6 == $image_w6) {
                $pos_h6 = $pos_h6 - $pos_h6;
            }
        }
    } else {
        list($image_w6, $image_h6) = getimagesize($new_image6);
        if ($image_h6 > $image_w6) {
            $pos_w6 = 0;
            $pos_h6 = 60;
        } else if ($image_w6 > $image_h6) {
            $pos_h6 = 0;
            $pos_w6 = 240;
        } else if ($image_w6 == $image_h6) {
            $pos_h6 = 0;
            $pos_w6 = 100;
        }
    }
    if (isset($_POST['slot_7_de']) && ($_POST['slot_7_de'] != "")) {
        $slot_7_de = explode("_", $_POST['slot_7_de']);
        $pos_w7 = $slot_7_de[0];
        $pos_h7 = $slot_7_de[2];
        if ($pos_w7 > ($pos_w7 / 2)) {
            list($image_w7, $image_h7) = getimagesize($new_image7);
            if ($image_h7 == $image_w7) {
                $pos_w7 = $slot_7_de[0] * 1.15;
            }
            //width greater
            if ($image_h7 < $image_w7) {
                $pos_w7 = $slot_7_de[0] * 1.32;
            }
        }
        //height
        if ($pos_h7 > ($pos_h7 / 2)) {
            list($image_w7, $image_h7) = getimagesize($new_image7);
            //graeter
            if ($image_h7 > $image_w7) {
                $pos_h7 = $pos_h7 * 1.56;
            }
            //equal
            if ($image_h7 == $image_w7) {
                $pos_h7 = $pos_h7 * 1;
            }
        }
    } else {
        list($image_w7, $image_h7) = getimagesize($new_image7);
        if ($image_h7 > $image_w7) {
            $pos_w7 = 0;
            $pos_h7 = 60;
        } else if ($image_w7 > $image_h7) {
            $pos_h7 = 0;
            $pos_w7 = 240;
        } else if ($image_w7 == $image_h7) {
            $pos_h7 = 0;
            $pos_w7 = 100;
        }
    }
    if (isset($_POST['slot_8_de']) && ($_POST['slot_8_de'] != "")) {
        $slot_8_de = explode("_", $_POST['slot_8_de']);
        $pos_w8 = $slot_8_de[0];
        $pos_h8 = $slot_8_de[2];
        if ($pos_w8 > ($pos_w8 / 2)) {
            list($image_w8, $image_h8) = getimagesize($new_image8);
            if ($image_h8 == $image_w8) {
                $pos_w8 = $slot_8_de[0] * 1.3;
            }
            //width greater
            if ($image_h8 < $image_w8) {
                $pos_w8 = $slot_8_de[0] * 1;
            }
        }
        //height
        if ($pos_h8 > ($pos_h8 / 2)) {
            list($image_w8, $image_h8) = getimagesize($new_image8);
            //graeter
            if ($image_h8 > $image_w8) {
                $pos_h8 = $pos_h8 * 1.56;
            }
            //equal
            if ($image_h8 == $image_w8) {
                $pos_h8 = $pos_h8 * 1;
            }
        }
    } else {
        list($image_w8, $image_h8) = getimagesize($new_image8);
        if ($image_h8 > $image_w8) {
            $pos_w8 = 0;
            $pos_h8 = 190;
        } else if ($image_w8 > $image_h8) {
            $pos_h8 = 0;
            $pos_w8 = 0;
        } else if ($image_w8 == $image_h8) {
            $pos_h8 = 75;
            $pos_w8 = 0;
        }
    }
    if (isset($_POST['slot_9_de']) && ($_POST['slot_9_de'] != "")) {
        $slot_9_de = explode("_", $_POST['slot_9_de']);
        $pos_w9 = $slot_9_de[0];
        $pos_h9 = $slot_9_de[2];
        if ($pos_w9 > ($pos_w9 / 2)) {
            list($image_w9, $image_h9) = getimagesize($new_image9);
            if ($image_h9 == $image_w9) {
                $pos_w9 = $slot_9_de[0] * 0.65;
            }
            //width greater
            if ($image_h9 < $image_w9) {
                $pos_w9 = $slot_9_de[0] * 0.68;
            }
        }
        //height
        if ($pos_h9 > ($pos_h9 / 2)) {
            list($image_w9, $image_h9) = getimagesize($new_image9);
            //graeter
            if ($image_h9 > $image_w9) {
                $pos_h9 = $pos_h9 * 0.65;
            }
            //equal
            if ($image_h9 == $image_w9) {
                $pos_h9 = $pos_h9 * 1;
            }
        }
    } else {
        list($image_w9, $image_h9) = getimagesize($new_image9);
        if ($image_h9 > $image_w9) {
            $pos_w9 = 0;
            $pos_h9 = 15;
        } else if ($image_w9 > $image_h9) {
            $pos_h9 = 0;
            $pos_w9 = 120;
        } else if ($image_w9 == $image_h9) {
            $pos_h9 = 0;
            $pos_w9 = 50;
        }
    }
    if (isset($_POST['slot_10_de']) && ($_POST['slot_10_de'] != "")) {
        $slot_10_de = explode("_", $_POST['slot_10_de']);
        $pos_w10 = $slot_10_de[0];
        $pos_h10 = $slot_10_de[2];
        if ($pos_w10 > ($pos_w10 / 2)) {
            list($image_w10, $image_h10) = getimagesize($new_image10);
            if ($image_h10 == $image_w10) {
                $pos_w10 = $slot_10_de[0] * 0.65;
            }
            //width greater
            if ($image_h10 < $image_w10) {
                $pos_w10 = $slot_10_de[0] * 0.68;
            }
        }
        //height
        if ($pos_h10 > ($pos_h10 / 2)) {
            list($image_w10, $image_h10) = getimagesize($new_image10);
            //graeter
            if ($image_h10 > $image_w10) {
                $pos_h10 = $pos_h10 * 0.65;
            }
            //equal
            if ($image_h10 == $image_w10) {
                $pos_h10 = $pos_h10 * 1;
            }
        }
    } else {
        list($image_w10, $image_h10) = getimagesize($new_image10);
        if ($image_h10 > $image_w10) {
            $pos_w10 = 0;
            $pos_h10 = 15;
        } else if ($image_w10 > $image_h10) {
            $pos_h10 = 0;
            $pos_w10 = 120;
        } else if ($image_w10 == $image_h10) {
            $pos_h10 = 0;
            $pos_w10 = 50;
        }
    }
    if (isset($_POST['slot_11_de']) && ($_POST['slot_11_de'] != "")) {
        $slot_11_de = explode("_", $_POST['slot_11_de']);
        $pos_w11 = $slot_11_de[0];
        $pos_h11 = $slot_11_de[2];
        if ($pos_w11 > ($pos_w11 / 2)) {
            list($image_w11, $image_h11) = getimagesize($new_image11);
            if ($image_h11 == $image_w11) {
                $pos_w11 = $slot_11_de[0] * 1.3;
            }
            //width greater
            if ($image_h11 < $image_w11) {
                $pos_w11 = $slot_11_de[0] * 1;
            }
        }
        //height
        if ($pos_h11 > ($pos_h11 / 2)) {
            list($image_w11, $image_h11) = getimagesize($new_image11);
            //graeter
            if ($image_h11 > $image_w11) {
                $pos_h11 = $pos_h11 * 1.56;
            }
            //equal
            if ($image_h11 == $image_w11) {
                $pos_h11 = $pos_h11 * 1;
            }
        }
    } else {
        list($image_w11, $image_h11) = getimagesize($new_image11);
        if ($image_h11 > $image_w11) {
            $pos_w11 = 0;
            $pos_h11 = 190;
        } else if ($image_w11 > $image_h11) {
            $pos_h11 = 0;
            $pos_w11 = 0;
        } else if ($image_w11 == $image_h11) {
            $pos_h11 = 75;
            $pos_w11 = 0;
        }
    }
    if (isset($_POST['slot_12_de']) && ($_POST['slot_12_de'] != "")) {
        $slot_12_de = explode("_", $_POST['slot_12_de']);
        $pos_w12 = $slot_12_de[0];
        $pos_h12 = $slot_12_de[2];
        if ($pos_w12 > ($pos_w12 / 2)) {
            list($image_w12, $image_h12) = getimagesize($new_image12);
            if ($image_h12 == $image_w12) {
                $pos_w12 = $slot_12_de[0] * 1.3;
            }
            //width greater
            if ($image_h12 < $image_w12) {
                $pos_w12 = $slot_12_de[0] * 1;
            }
        }
        //height
        if ($pos_h12 > ($pos_h12 / 2)) {
            list($image_w12, $image_h12) = getimagesize($new_image12);
            //graeter
            if ($image_h12 > $image_w12) {
                $pos_h12 = $pos_h12 * 1.56;
            }
            //equal
            if ($image_h12 == $image_w12) {
                $pos_h12 = $pos_h12 * 1;
            }
        }
    } else {
        list($image_w12, $image_h12) = getimagesize($new_image12);
        if ($image_h12 > $image_w12) {
            $pos_w12 = 0;
            $pos_h12 = 190;
        } else if ($image_w12 > $image_h12) {
            $pos_h12 = 0;
            $pos_w12 = 0;
        } else if ($image_w12 == $image_h12) {
            $pos_h12 = 75;
            $pos_w12 = 0;
        }
    }
}
//Frame 54 Starts
if ($f_id == '54') {
    if (isset($_POST['slot_1_de']) && ($_POST['slot_1_de'] != "")) {
        $slot_1_de = explode("_", $_POST['slot_1_de']);
        $pos_w1 = $slot_1_de[0];
        $pos_h1 = $slot_1_de[2];
        if ($pos_w1 > ($pos_w1 / 2)) {
            list($image_w1, $image_h1) = getimagesize($new_image1);
            if ($image_h1 == $image_w1) {
                $pos_w1 = $slot_1_de[0] * 1.04;
            }
            //width greater
            if ($image_h1 < $image_w1) {
                $pos_w1 = $slot_1_de[0]*1.02;
            }
        }
        //height
        if ($pos_h1 > ($pos_h1 / 2)) {
            list($image_w1, $image_h1) = getimagesize($new_image1);
            //graeter
            if ($image_h1 > $image_w1) {
                $pos_h1 = $pos_h1 -$pos_h1;
            }
            //equal
            if ($image_h1 == $image_w1) {
               $pos_h1 = $pos_h1 * 1;
            }
        }
    } else {
        list($image_w1, $image_h1) = getimagesize($new_image1);
        if ($image_h1 > $image_w1) {
            $pos_w1 = 0;
            $pos_h1 = 0;
        } else if ($image_w1 > $image_h1) {
            $pos_h1 = 0;
            $pos_w1 = 200;
        } else if ($image_w1 == $image_h1) {
            $pos_h1 = 0;
            $pos_w1 = 75;
        }
    }
    if (isset($_POST['slot_2_de']) && ($_POST['slot_2_de'] != "")) {
        $slot_2_de = explode("_", $_POST['slot_2_de']);
        $pos_w2 = $slot_2_de[0];
        $pos_h2 = $slot_2_de[2];
        if ($pos_w2 > ($pos_w2 / 2)) {
            list($image_w2, $image_h2) = getimagesize($new_image2);
            if ($image_h2 == $image_w2) {
                $pos_w2 = $slot_2_de[0] * 1.04;;
            }
            //width greater
            if ($image_h2 < $image_w2) {
                $pos_w2 = $slot_2_de[0] * 1.02;
            }
        }
        //height
        if ($pos_h2 > ($pos_h2 / 2)) {
            list($image_w2, $image_h2) = getimagesize($new_image2);
            //graeter
            if ($image_h2 > $image_w2) {
                $pos_h2 = $pos_h2-$pos_h2;
            }
            //equal
            if ($image_h2 == $image_w2) {
                $pos_h2 = $pos_h2 * 1;
            }
        }
    } else {
        list($image_w2, $image_h2) = getimagesize($new_image2);
        if ($image_h2 > $image_w2) {
            $pos_w2 = 0;
            $pos_h2 = 0;
        } else if ($image_w2 > $image_h2) {
            $pos_h2 = 0;
            $pos_w2 = 200;
        } else if ($image_w2 == $image_h2) {
            $pos_h2 = 0;
            $pos_w2 = 75;
        }
    }
    if (isset($_POST['slot_3_de']) && ($_POST['slot_3_de'] != "")) {
        $slot_3_de = explode("_", $_POST['slot_3_de']);
        $pos_w3 = $slot_3_de[0];
        $pos_h3 = $slot_3_de[2];
        if ($pos_w3 > ($pos_w3 / 2)) {
            list($image_w3, $image_h3) = getimagesize($new_image3);
            if ($image_h3 == $image_w3) {
                $pos_w3 = $slot_3_de[0] * 2.1;
            }
            //width greater
            if ($image_h3 < $image_w3) {
                $pos_w3 = $slot_3_de[0] * 1.3;
            }
        }
        //height
        if ($pos_h3 > ($pos_h3 / 2)) {
            list($image_w3, $image_h3) = getimagesize($new_image3);
            //graeter
            if ($image_h3 > $image_w3) {
                $pos_h3 = $pos_h3 * 1.9;
            }
            //equal
            if ($image_h3 == $image_w3) {
                $pos_h3 = $pos_h3 * 1.4;
            }
        }
    } else {
        list($image_w3, $image_h3) = getimagesize($new_image3);
        if ($image_h3 > $image_w3) {
            $pos_w3 = 0;
            $pos_h3 = 245;
        } else if ($image_w3 > $image_h3) {
            $pos_h3 = 0;
            $pos_w3 = 30;
        } else if ($image_w3 == $image_h3) {
            $pos_h3 = 90;
            $pos_w3 = 0;
        }
    }
    if (isset($_POST['slot_4_de']) && ($_POST['slot_4_de'] != "")) {
        $slot_4_de = explode("_", $_POST['slot_4_de']);
        $pos_w4 = $slot_4_de[0];
        $pos_h4 = $slot_4_de[2];
        if ($pos_w4 > ($pos_w4 / 2)) {
            list($image_w4, $image_h4) = getimagesize($new_image4);
            if ($image_h4 == $image_w4) {
                $pos_w4 = $slot_4_de[0] * 0.65;
            }
            //width greater
            if ($image_h4 < $image_w4) {
                $pos_w4 = $slot_4_de[0] * 0.68;
            }
        }
        //height
        if ($pos_h4 > ($pos_h4 / 2)) {
            list($image_w4, $image_h4) = getimagesize($new_image4);
            //graeter
            if ($image_h4 > $image_w4) {
                $pos_h4 = $pos_h4 * 1;
            }
            //equal
            if ($image_h4 == $image_w4) {
                $pos_h4 =$pos_h4 * 0.67;
            }
        }
    } else {
        list($image_w4, $image_h4) = getimagesize($new_image4);
        if ($image_h4 > $image_w4) {
            $pos_w4 = 0;
            $pos_h4 = 120;
        } else if ($image_w4 > $image_h4) {
            $pos_h4 = 0;
            $pos_w4 = 0;
        } else if ($image_w4 == $image_h4) {
            $pos_h4 = 45;
            $pos_w4 = 0;
        }
    }
    if (isset($_POST['slot_5_de']) && ($_POST['slot_5_de'] != "")) {
        $slot_5_de = explode("_", $_POST['slot_5_de']);
        $pos_w5 = $slot_5_de[0];
        $pos_h5 = $slot_5_de[2];
        if ($pos_w5 > ($pos_w5 / 2)) {
            list($image_w5, $image_h5) = getimagesize($new_image5);
            if ($image_h5 == $image_w5) {
                $pos_w5 = $slot_5_de[0] * 0.67;
            }
            //width greater
            if ($image_h5 < $image_w5) {
                
                $pos_w5 = $slot_5_de[0] * 0.5;
            }
        }
        //height
        if ($pos_h5 > ($pos_h5 / 2)) {
            list($image_w5, $image_h5) = getimagesize($new_image5);
            //graeter
            if ($image_h5 > $image_w5) {

                $pos_h5 = $pos_h5 *1;
            }
            //equal
            if ($image_h5 == $image_w5) {
                $pos_h5 = $pos_h5 * 0.67;
            }
        }
    } else {
        list($image_w5, $image_h5) = getimagesize($new_image5);
        if ($image_h5 > $image_w5) {
            $pos_w5 = 0;
            $pos_h5 = 120;
        } else if ($image_w5 > $image_h5) {
            $pos_h5 = 0;
            $pos_w5 = 0;
        } else if ($image_w5 == $image_h5) {
            $pos_h5 = 45;
            $pos_w5 = 0;
        }
    }
    if (isset($_POST['slot_6_de']) && ($_POST['slot_6_de'] != "")) {
        $slot_6_de = explode("_", $_POST['slot_6_de']);
        $pos_w6 = $slot_6_de[0];
        $pos_h6 = $slot_6_de[2];
        if ($pos_w6 > ($pos_w6 / 2)) {
            list($image_w6, $image_h6) = getimagesize($new_image6);
            if ($image_h6 == $image_w6) {
                $pos_w6 = $slot_6_de[0] * 1.04;
            }
            //width greater
            if ($image_h6 < $image_w6) {
                $pos_w6 = $slot_6_de[0] * 1.02;
            }
        }
        //height
        if ($pos_h6 > ($pos_h6 / 2)) {
            list($image_w6, $image_h6) = getimagesize($new_image6);
            //graeter
            if ($image_h6 > $image_w6) {
                $pos_h6 = $pos_h6 - $pos_h6;
            }
            //equal
            if ($image_h6 == $image_w6) {
                $pos_h6 = $pos_h6 * 1;
            }
        }
    } else {
        list($image_w6, $image_h6) = getimagesize($new_image6);
        if ($image_h6 > $image_w6) {
            $pos_w6 = 0;
            $pos_h6 = 0;
        } else if ($image_w6 > $image_h6) {
            $pos_h6 = 0;
            $pos_w6 = 200;
        } else if ($image_w6 == $image_h6) {
            $pos_h6 = 0;
            $pos_w6 = 75;
        }
    }
    if (isset($_POST['slot_7_de']) && ($_POST['slot_7_de'] != "")) {
        $slot_7_de = explode("_", $_POST['slot_7_de']);
        $pos_w7 = $slot_7_de[0];
        $pos_h7 = $slot_7_de[2];
        if ($pos_w7 > ($pos_w7 / 2)) {
            list($image_w7, $image_h7) = getimagesize($new_image7);
            if ($image_h7 == $image_w7) {
                $pos_w7 = $slot_7_de[0] * 1.04;
            }
            //width greater
            if ($image_h7 < $image_w7) {
                $pos_w7 = $slot_7_de[0] * 1.02;
            }
        }
        //height
        if ($pos_h7 > ($pos_h7 / 2)) {
            list($image_w7, $image_h7) = getimagesize($new_image7);
            //graeter
            if ($image_h7 > $image_w7) {
                $pos_h7 = $pos_h7 - $pos_h7;
            }
            //equal
            if ($image_h7 == $image_w7) {
                $pos_h7 = $pos_h7 * 1;
            }
        }
    } else {
        list($image_w7, $image_h7) = getimagesize($new_image7);
        if ($image_h7 > $image_w7) {
            $pos_w7 = 0;
            $pos_h7 = 0;
        } else if ($image_w7 > $image_h7) {
            $pos_h7 = 0;
            $pos_w7 = 200;
        } else if ($image_w7 == $image_h7) {
            $pos_h7 = 0;
            $pos_w7 = 75;
        }
    }
    if (isset($_POST['slot_8_de']) && ($_POST['slot_8_de'] != "")) {
        $slot_8_de = explode("_", $_POST['slot_8_de']);
        $pos_w8 = $slot_8_de[0];
        $pos_h8 = $slot_8_de[2];
        if ($pos_w8 > ($pos_w8 / 2)) {
            list($image_w8, $image_h8) = getimagesize($new_image8);
            if ($image_h8 == $image_w8) {
                $pos_w8 = $slot_8_de[0] * 0.65;
            }
            //width greater
            if ($image_h8 < $image_w8) {
                $pos_w8 = $slot_8_de[0] * 0.5;
            }
        }
        //height
        if ($pos_h8 > ($pos_h8 / 2)) {
            list($image_w8, $image_h8) = getimagesize($new_image8);
            //graeter
            if ($image_h8 > $image_w8) {
                $pos_h8 = $pos_h8 * 1;
            }
            //equal
            if ($image_h8 == $image_w8) {
                $pos_h8 = $pos_h8 * 0.67;
            }
        }
    } else {
        list($image_w8, $image_h8) = getimagesize($new_image8);
        if ($image_h8 > $image_w8) {
            $pos_w8 = 0;
            $pos_h8 = 120;
        } else if ($image_w8 > $image_h8) {
            $pos_h8 = 0;
            $pos_w8 = 0;
        } else if ($image_w8 == $image_h8) {
            $pos_h8 = 45;
            $pos_w8 = 0;
        }
    }
    if (isset($_POST['slot_9_de']) && ($_POST['slot_9_de'] != "")) {
        $slot_9_de = explode("_", $_POST['slot_9_de']);
        $pos_w9 = $slot_9_de[0];
        $pos_h9 = $slot_9_de[2];
        if ($pos_w9 > ($pos_w9 / 2)) {
            list($image_w9, $image_h9) = getimagesize($new_image9);
            if ($image_h9 == $image_w9) {
                $pos_w9 = $slot_9_de[0] * 0.65;
            }
            //width greater
            if ($image_h9 < $image_w9) {
                $pos_w9 = $slot_9_de[0] * 0.5;
            }
        }
        //height
        if ($pos_h9 > ($pos_h9 / 2)) {
            list($image_w9, $image_h9) = getimagesize($new_image9);
            //graeter
            if ($image_h9 > $image_w9) {
                $pos_h9 = $pos_h9 * 1;
            }
            //equal
            if ($image_h9 == $image_w9) {
                $pos_h9 = $pos_h9 * 0.67;
            }
        }
    } else {
        list($image_w9, $image_h9) = getimagesize($new_image9);
        if ($image_h9 > $image_w9) {
            $pos_w9 = 0;
            $pos_h9 = 120;
        } else if ($image_w9 > $image_h9) {
            $pos_h9 = 0;
            $pos_w9 = 0;
        } else if ($image_w9 == $image_h9) {
            $pos_h9 = 45;
            $pos_w9 = 0;
        }
    }
    if (isset($_POST['slot_10_de']) && ($_POST['slot_10_de'] != "")) {
        $slot_10_de = explode("_", $_POST['slot_10_de']);
        $pos_w10 = $slot_10_de[0];
        $pos_h10 = $slot_10_de[2];
        if ($pos_w10 > ($pos_w10 / 2)) {
            list($image_w10, $image_h10) = getimagesize($new_image10);
            if ($image_h10 == $image_w10) {
                $pos_w10 = $slot_10_de[0] * 2.1;
            }
            //width greater
            if ($image_h10 < $image_w10) {
                $pos_w10 = $slot_10_de[0] * 1.3;
            }
        }
        //height
        if ($pos_h10 > ($pos_h10 / 2)) {
            list($image_w10, $image_h10) = getimagesize($new_image10);
            //graeter
            if ($image_h10 > $image_w10) {
                $pos_h10 = $pos_h10 *  1.9;
            }
            //equal
            if ($image_h10 == $image_w10) {
                $pos_h10 = $pos_h10 * 1.4;
            }
        }
    } else {
        list($image_w10, $image_h10) = getimagesize($new_image10);
        if ($image_h10 > $image_w10) {
            $pos_w10= 0;
            $pos_h10 = 245;
        } else if ($image_w10 > $image_h10) {
            $pos_h10 = 0;
            $pos_w10 = 0;
        } else if ($image_w10 == $image_h10) {
            $pos_h10 = 90;
            $pos_w10= 0;
        }
    }
    if (isset($_POST['slot_11_de']) && ($_POST['slot_11_de'] != "")) {
        $slot_11_de = explode("_", $_POST['slot_11_de']);
        $pos_w11 = $slot_11_de[0];
        $pos_h11 = $slot_11_de[2];
        if ($pos_w11 > ($pos_w11 / 2)) {
            list($image_w11, $image_h11) = getimagesize($new_image11);
            if ($image_h11 == $image_w11) {
                $pos_w11 = $slot_11_de[0] * 1.04;
            }
            //width greater
            if ($image_h11 < $image_w11) {
                $pos_w11 = $slot_11_de[0] * 1.02;
            }
        }
        //height
        if ($pos_h11 > ($pos_h11 / 2)) {
            list($image_w11, $image_h11) = getimagesize($new_image11);
            //graeter
            if ($image_h11 > $image_w11) {
                $pos_h11 = $pos_h11 - $pos_h11;
            }
            //equal
            if ($image_h11 == $image_w11) {
                $pos_h11 = $pos_h11 * 1;
            }
        }
    } else {
        list($image_w11, $image_h11) = getimagesize($new_image11);
        if ($image_h11 > $image_w11) {
            $pos_w11 = 0;
            $pos_h11 = 0;
        } else if ($image_w11 > $image_h11) {
            $pos_h11 = 0;
            $pos_w11 = 200;
        } else if ($image_w11 == $image_h11) {
            $pos_h11 = 0;
            $pos_w11 = 75;
        }
    }
    if (isset($_POST['slot_12_de']) && ($_POST['slot_12_de'] != "")) {
        $slot_12_de = explode("_", $_POST['slot_12_de']);
        $pos_w12 = $slot_12_de[0];
        $pos_h12 = $slot_12_de[2];
        if ($pos_w12 > ($pos_w12 / 2)) {
            list($image_w12, $image_h12) = getimagesize($new_image12);
            if ($image_h12 == $image_w12) {
                $pos_w12 = $slot_12_de[0] * 1.04;
            }
            //width greater
            if ($image_h12 < $image_w12) {
                $pos_w12 = $slot_12_de[0] * 1.02;
            }
        }
        //height
        if ($pos_h12 > ($pos_h12 / 2)) {
            list($image_w12, $image_h12) = getimagesize($new_image12);
            //graeter
            if ($image_h12 > $image_w12) {
                $pos_h12 = $pos_h12-$pos_h12;
            }
            //equal
            if ($image_h12 == $image_w12) {
                $pos_h12 = $pos_h12 * 1;
            }
        }
    } else {
        list($image_w12, $image_h12) = getimagesize($new_image12);
        if ($image_h12 > $image_w12) {
            $pos_w12 = 0;
            $pos_h12 = 0;
        } else if ($image_w12 > $image_h12) {
            $pos_h12 = 0;
            $pos_w12 = 200;
        } else if ($image_w12 == $image_h12) {
            $pos_h12 = 0;
            $pos_w12 = 75;
        }
    }
}
//Frame 55 Starts
if ($f_id == '55') {
    if (isset($_POST['slot_1_de']) && ($_POST['slot_1_de'] != "")) {
        $slot_1_de = explode("_", $_POST['slot_1_de']);
        $pos_w1 = $slot_1_de[0];
        $pos_h1 = $slot_1_de[2];
        if ($pos_w1 > ($pos_w1 / 2)) {
            list($image_w1, $image_h1) = getimagesize($new_image1);
            if ($image_h1 == $image_w1) {
                $pos_w1 = $slot_1_de[0] * 1.04;
            }
            //width greater
            if ($image_h1 < $image_w1) {
                $pos_w1 = $slot_1_de[0]*1.02;
            }
        }
        //height
        if ($pos_h1 > ($pos_h1 / 2)) {
            list($image_w1, $image_h1) = getimagesize($new_image1);
            //graeter
            if ($image_h1 > $image_w1) {
                $pos_h1 = $pos_h1 *1;
            }
            //equal
            if ($image_h1 == $image_w1) {
               $pos_h1 = $pos_h1 * 1;
            }
        }
    } else {
        list($image_w1, $image_h1) = getimagesize($new_image1);
        if ($image_h1 > $image_w1) {
            $pos_w1 = 0;
            $pos_h1 = 0;
        } else if ($image_w1 > $image_h1) {
            $pos_h1 = 0;
            $pos_w1 = 195;
        } else if ($image_w1 == $image_h1) {
            $pos_h1 = 0;
            $pos_w1 = 75;
        }
    }
    if (isset($_POST['slot_2_de']) && ($_POST['slot_2_de'] != "")) {
        $slot_2_de = explode("_", $_POST['slot_2_de']);
        $pos_w2 = $slot_2_de[0];
        $pos_h2 = $slot_2_de[2];
        if ($pos_w2 > ($pos_w2 / 2)) {
            list($image_w2, $image_h2) = getimagesize($new_image2);
            if ($image_h2 == $image_w2) {
                $pos_w2 = $slot_2_de[0] *1.04;
            }
            //width greater
            if ($image_h2 < $image_w2) {
                $pos_w2 = $slot_2_de[0] * 1.02;
            }
        }
        //height
        if ($pos_h2 > ($pos_h2 / 2)) {
            list($image_w2, $image_h2) = getimagesize($new_image2);
            //graeter
            if ($image_h2 > $image_w2) {
                $pos_h2 = $pos_h2*1;
            }
            //equal
            if ($image_h2 == $image_w2) {
                $pos_h2 = $pos_h2 * 1;
            }
        }
    } else {
        list($image_w2, $image_h2) = getimagesize($new_image2);
        if ($image_h2 > $image_w2) {
            $pos_w2 = 0;
            $pos_h2 = 0;
        } else if ($image_w2 > $image_h2) {
            $pos_h2 = 0;
            $pos_w2 = 195;
        } else if ($image_w2 == $image_h2) {
            $pos_h2 = 0;
            $pos_w2 = 75;
        }
    }
    if (isset($_POST['slot_3_de']) && ($_POST['slot_3_de'] != "")) {
        $slot_3_de = explode("_", $_POST['slot_3_de']);
        $pos_w3 = $slot_3_de[0];
        $pos_h3 = $slot_3_de[2];
        if ($pos_w3 > ($pos_w3 / 2)) {
            list($image_w3, $image_h3) = getimagesize($new_image3);
            if ($image_h3 == $image_w3) {
                $pos_w3 = $slot_3_de[0] * 1.04;
            }
            //width greater
            if ($image_h3 < $image_w3) {
                $pos_w3 = $slot_3_de[0] * 1.02;
            }
        }
        //height
        if ($pos_h3 > ($pos_h3 / 2)) {
            list($image_w3, $image_h3) = getimagesize($new_image3);
            //graeter
            if ($image_h3 > $image_w3) {
                $pos_h3 = $pos_h3 * 1;
            }
            //equal
            if ($image_h3 == $image_w3) {
                $pos_h3 = $pos_h3 * 1.4;
            }
        }
    } else {
        list($image_w3, $image_h3) = getimagesize($new_image3);
        if ($image_h3 > $image_w3) {
            $pos_w3 = 0;
            $pos_h3 = 0;
        } else if ($image_w3 > $image_h3) {
            $pos_h3 = 0;
            $pos_w3 = 195;
        } else if ($image_w3 == $image_h3) {
            $pos_h3 = 0;
            $pos_w3 = 75;
        }
    }
    if (isset($_POST['slot_4_de']) && ($_POST['slot_4_de'] != "")) {
        $slot_4_de = explode("_", $_POST['slot_4_de']);
        $pos_w4 = $slot_4_de[0];
        $pos_h4 = $slot_4_de[2];
        if ($pos_w4 > ($pos_w4 / 2)) {
            list($image_w4, $image_h4) = getimagesize($new_image4);
            if ($image_h4 == $image_w4) {
                $pos_w4 = $slot_4_de[0] * 1.04;
            }
            //width greater
            if ($image_h4 < $image_w4) {
                $pos_w4 = $slot_4_de[0] * 1.02;
            }
        }
        //height
        if ($pos_h4 > ($pos_h4 / 2)) {
            list($image_w4, $image_h4) = getimagesize($new_image4);
            //graeter
            if ($image_h4 > $image_w4) {
                $pos_h4 = $pos_h4 * 1;
            }
            //equal
            if ($image_h4 == $image_w4) {
                $pos_h4 =$pos_h4 * 0.67;
            }
        }
    } else {
        list($image_w4, $image_h4) = getimagesize($new_image4);
        if ($image_h4 > $image_w4) {
            $pos_w4 = 0;
            $pos_h4 = 0;
        } else if ($image_w4 > $image_h4) {
            $pos_h4 = 0;
            $pos_w4 = 195;
        } else if ($image_w4 == $image_h4) {
            $pos_h4 = 0;
            $pos_w4 = 75;
        }
    }
    if (isset($_POST['slot_5_de']) && ($_POST['slot_5_de'] != "")) {
        $slot_5_de = explode("_", $_POST['slot_5_de']);
        $pos_w5 = $slot_5_de[0];
        $pos_h5 = $slot_5_de[2];
        if ($pos_w5 > ($pos_w5 / 2)) {
            list($image_w5, $image_h5) = getimagesize($new_image5);
            if ($image_h5 == $image_w5) {
                $pos_w5 = $slot_5_de[0] * 1.04;
            }
            //width greater
            if ($image_h5 < $image_w5) {
                
                $pos_w5 = $slot_5_de[0] * 1.02;
            }
        }
        //height
        if ($pos_h5 > ($pos_h5 / 2)) {
            list($image_w5, $image_h5) = getimagesize($new_image5);
            //graeter
            if ($image_h5 > $image_w5) {

                $pos_h5 = $pos_h5 *1;
            }
            //equal
            if ($image_h5 == $image_w5) {
                $pos_h5 = $pos_h5 * 0.67;
            }
        }
    } else {
        list($image_w5, $image_h5) = getimagesize($new_image5);
        if ($image_h5 > $image_w5) {
            $pos_w5 = 0;
            $pos_h5 = 0;
        } else if ($image_w5 > $image_h5) {
            $pos_h5 = 0;
            $pos_w5 = 195;
        } else if ($image_w5 == $image_h5) {
            $pos_h5 = 0;
            $pos_w5 = 75;
        }
    }
    if (isset($_POST['slot_6_de']) && ($_POST['slot_6_de'] != "")) {
        $slot_6_de = explode("_", $_POST['slot_6_de']);
        $pos_w6 = $slot_6_de[0];
        $pos_h6 = $slot_6_de[2];
        if ($pos_w6 > ($pos_w6 / 2)) {
            list($image_w6, $image_h6) = getimagesize($new_image6);
            if ($image_h6 == $image_w6) {
                $pos_w6 = $slot_6_de[0] * 1.04;
            }
            //width greater
            if ($image_h6 < $image_w6) {
                $pos_w6 = $slot_6_de[0] * 1.02;
            }
        }
        //height
        if ($pos_h6 > ($pos_h6 / 2)) {
            list($image_w6, $image_h6) = getimagesize($new_image6);
            //graeter
            if ($image_h6 > $image_w6) {
                $pos_h6 = $pos_h6 * 1;
            }
            //equal
            if ($image_h6 == $image_w6) {
                $pos_h6 = $pos_h6 * 1;
            }
        }
    } else {
        list($image_w6, $image_h6) = getimagesize($new_image6);
        if ($image_h6 > $image_w6) {
            $pos_w6 = 0;
            $pos_h6 = 0;
        } else if ($image_w6 > $image_h6) {
            $pos_h6 = 0;
            $pos_w6 = 195;
        } else if ($image_w6 == $image_h6) {
            $pos_h6 = 0;
            $pos_w6 = 75;
        }
    }
    if (isset($_POST['slot_7_de']) && ($_POST['slot_7_de'] != "")) {
        $slot_7_de = explode("_", $_POST['slot_7_de']);
        $pos_w7 = $slot_7_de[0];
        $pos_h7 = $slot_7_de[2];
        if ($pos_w7 > ($pos_w7 / 2)) {
            list($image_w7, $image_h7) = getimagesize($new_image7);
            if ($image_h7 == $image_w7) {
                $pos_w7 = $slot_7_de[0] * 1.04;
            }
            //width greater
            if ($image_h7 < $image_w7) {
                $pos_w7 = $slot_7_de[0] * 1.02;
            }
        }
        //height
        if ($pos_h7 > ($pos_h7 / 2)) {
            list($image_w7, $image_h7) = getimagesize($new_image7);
            //graeter
            if ($image_h7 > $image_w7) {
                $pos_h7 = $pos_h7 * 1;
            }
            //equal
            if ($image_h7 == $image_w7) {
                $pos_h7 = $pos_h7 * 1;
            }
        }
    } else {
        list($image_w7, $image_h7) = getimagesize($new_image7);
        if ($image_h7 > $image_w7) {
            $pos_w7 = 0;
            $pos_h7 = 0;
        } else if ($image_w7 > $image_h7) {
            $pos_h7 = 0;
            $pos_w7 = 195;
        } else if ($image_w7 == $image_h7) {
            $pos_h7 = 0;
            $pos_w7 = 75;
        }
    }
    if (isset($_POST['slot_8_de']) && ($_POST['slot_8_de'] != "")) {
        $slot_8_de = explode("_", $_POST['slot_8_de']);
        $pos_w8 = $slot_8_de[0];
        $pos_h8 = $slot_8_de[2];
        if ($pos_w8 > ($pos_w8 / 2)) {
            list($image_w8, $image_h8) = getimagesize($new_image8);
            if ($image_h8 == $image_w8) {
                $pos_w8 = $slot_8_de[0] * 1.04;
            }
            //width greater
            if ($image_h8 < $image_w8) {
                $pos_w8 = $slot_8_de[0] * 1.02;
            }
        }
        //height
        if ($pos_h8 > ($pos_h8 / 2)) {
            list($image_w8, $image_h8) = getimagesize($new_image8);
            //graeter
            if ($image_h8 > $image_w8) {
                $pos_h8 = $pos_h8 * 1;
            }
            //equal
            if ($image_h8 == $image_w8) {
                $pos_h8 = $pos_h8 * 0.67;
            }
        }
    } else {
        list($image_w8, $image_h8) = getimagesize($new_image8);
        if ($image_h8 > $image_w8) {
            $pos_w8 = 0;
            $pos_h8 = 0;
        } else if ($image_w8 > $image_h8) {
            $pos_h8 = 0;
            $pos_w8 = 195;
        } else if ($image_w8 == $image_h8) {
            $pos_h8 = 0;
            $pos_w8 = 75;
        }
    }
    if (isset($_POST['slot_9_de']) && ($_POST['slot_9_de'] != "")) {
        $slot_9_de = explode("_", $_POST['slot_9_de']);
        $pos_w9 = $slot_9_de[0];
        $pos_h9 = $slot_9_de[2];
        if ($pos_w9 > ($pos_w9 / 2)) {
            list($image_w9, $image_h9) = getimagesize($new_image9);
            if ($image_h9 == $image_w9) {
                $pos_w9 = $slot_9_de[0] * 1.04;
            }
            //width greater
            if ($image_h9 < $image_w9) {
                $pos_w9 = $slot_9_de[0] * 1.02;
            }
        }
        //height
        if ($pos_h9 > ($pos_h9 / 2)) {
            list($image_w9, $image_h9) = getimagesize($new_image9);
            //graeter
            if ($image_h9 > $image_w9) {
                $pos_h9 = $pos_h9 * 1;
            }
            //equal
            if ($image_h9 == $image_w9) {
                $pos_h9 = $pos_h9 * 0.67;
            }
        }
    } else {
        list($image_w9, $image_h9) = getimagesize($new_image9);
        if ($image_h9 > $image_w9) {
            $pos_w9 = 0;
            $pos_h9 = 0;
        } else if ($image_w9 > $image_h9) {
            $pos_h9 = 0;
            $pos_w9 = 195;
        } else if ($image_w9 == $image_h9) {
            $pos_h9 = 0;
            $pos_w9 = 75;
        }
    }
    if (isset($_POST['slot_10_de']) && ($_POST['slot_10_de'] != "")) {
        $slot_10_de = explode("_", $_POST['slot_10_de']);
        $pos_w10 = $slot_10_de[0];
        $pos_h10 = $slot_10_de[2];
        if ($pos_w10 > ($pos_w10 / 2)) {
            list($image_w10, $image_h10) = getimagesize($new_image10);
            if ($image_h10 == $image_w10) {
                $pos_w10 = $slot_10_de[0] * 1.04;
            }
            //width greater
            if ($image_h10 < $image_w10) {
                $pos_w10 = $slot_10_de[0] * 1.02;
            }
        }
        //height
        if ($pos_h10 > ($pos_h10 / 2)) {
            list($image_w10, $image_h10) = getimagesize($new_image10);
            //graeter
            if ($image_h10 > $image_w10) {
                $pos_h10 = $pos_h10 *  1;
            }
            //equal
            if ($image_h10 == $image_w10) {
                $pos_h10 = $pos_h10 * 1.4;
            }
        }
    } else {
        list($image_w10, $image_h10) = getimagesize($new_image10);
        if ($image_h10 > $image_w10) {
            $pos_w10= 0;
            $pos_h10 = 0;
        } else if ($image_w10 > $image_h10) {
            $pos_h10 = 0;
            $pos_w10 = 195;
        } else if ($image_w10 == $image_h10) {
            $pos_h10 = 0;
            $pos_w10= 75;
        }
    }
    if (isset($_POST['slot_11_de']) && ($_POST['slot_11_de'] != "")) {
        $slot_11_de = explode("_", $_POST['slot_11_de']);
        $pos_w11 = $slot_11_de[0];
        $pos_h11 = $slot_11_de[2];
        if ($pos_w11 > ($pos_w11 / 2)) {
            list($image_w11, $image_h11) = getimagesize($new_image11);
            if ($image_h11 == $image_w11) {
                $pos_w11 = $slot_11_de[0] * 1.04;
            }
            //width greater
            if ($image_h11 < $image_w11) {
                $pos_w11 = $slot_11_de[0] * 1.02;
            }
        }
        //height
        if ($pos_h11 > ($pos_h11 / 2)) {
            list($image_w11, $image_h11) = getimagesize($new_image11);
            //graeter
            if ($image_h11 > $image_w11) {
                $pos_h11 = $pos_h11 * 1;
            }
            //equal
            if ($image_h11 == $image_w11) {
                $pos_h11 = $pos_h11 * 1;
            }
        }
    } else {
        list($image_w11, $image_h11) = getimagesize($new_image11);
        if ($image_h11 > $image_w11) {
            $pos_w11 = 0;
            $pos_h11 = 0;
        } else if ($image_w11 > $image_h11) {
            $pos_h11 = 0;
            $pos_w11 = 195;
        } else if ($image_w11 == $image_h11) {
            $pos_h11 = 0;
            $pos_w11 = 75;
        }
    }
    if (isset($_POST['slot_12_de']) && ($_POST['slot_12_de'] != "")) {
        $slot_12_de = explode("_", $_POST['slot_12_de']);
        $pos_w12 = $slot_12_de[0];
        $pos_h12 = $slot_12_de[2];
        if ($pos_w12 > ($pos_w12 / 2)) {
            list($image_w12, $image_h12) = getimagesize($new_image12);
            if ($image_h12 == $image_w12) {
                $pos_w12 = $slot_12_de[0] * 1.04;
            }
            //width greater
            if ($image_h12 < $image_w12) {
                $pos_w12 = $slot_12_de[0] * 1.02;
            }
        }
        //height
        if ($pos_h12 > ($pos_h12 / 2)) {
            list($image_w12, $image_h12) = getimagesize($new_image12);
            //graeter
            if ($image_h12 > $image_w12) {
                $pos_h12 = $pos_h12 * 1;
            }
            //equal
            if ($image_h12 == $image_w12) {
                $pos_h12 = $pos_h12 * 1;
            }
        }
    } else {
        list($image_w12, $image_h12) = getimagesize($new_image12);
        if ($image_h12 > $image_w12) {
            $pos_w12 = 0;
            $pos_h12 = 0;
        } else if ($image_w12 > $image_h12) {
            $pos_h12 = 0;
            $pos_w12 = 195;
        } else if ($image_w12 == $image_h12) {
            $pos_h12 = 0;
            $pos_w12 = 75;
        }
    }
}
//Frames End Here
imagecopy($canvas, $icon1, $box_x1 / 4, $box_y1 / 4, $pos_w1, $pos_h1, $box_width1 / 4, $box_height1 / 4);
imagecopy($canvas, $icon2, $box_x2 / 4, $box_y2 / 4, $pos_w2, $pos_h2, $box_width2 / 4, $box_height2 / 4);
imagecopy($canvas, $icon3, $box_x3 / 4, $box_y3 / 4, $pos_w3, $pos_h3, $box_width3 / 4, $box_height3 / 4);
imagecopy($canvas, $icon4, $box_x4 / 4, $box_y4 / 4, $pos_w4, $pos_h4, $box_width4 / 4, $box_height4 / 4);
imagecopy($canvas, $icon5, $box_x5 / 4, $box_y5 / 4, $pos_w5, $pos_h5, $box_width5 / 4, $box_height5 / 4);
imagecopy($canvas, $icon6, $box_x6 / 4, $box_y6 / 4, $pos_w6, $pos_h6, $box_width6 / 4, $box_height6 / 4);
imagecopy($canvas, $icon7, $box_x7 / 4, $box_y7 / 4, $pos_w7, $pos_h7, $box_width7 / 4, $box_height7 / 4);
imagecopy($canvas, $icon8, $box_x8 / 4, $box_y8 / 4, $pos_w8, $pos_h8, $box_width8 / 4, $box_height8 / 4);
imagecopy($canvas, $icon9, $box_x9 / 4, $box_y9 / 4, $pos_w9, $pos_h9, $box_width9 / 4, $box_height9 / 4);
imagecopy($canvas, $icon10, $box_x10 / 4, $box_y10 / 4, $pos_w10, $pos_h10, $box_width10 / 4, $box_height10 / 4);
imagecopy($canvas, $icon11, $box_x11 / 4, $box_y11 / 4, $pos_w11, $pos_h11, $box_width11 / 4, $box_height11 / 4);
imagecopy($canvas, $icon12, $box_x12 / 4, $box_y12 / 4, $pos_w12, $pos_h12, $box_width12 / 4, $box_height12 / 4);
// ... copy additional source images to the canvas as needed
$path_to_save = '../frames_final/' . time() . '.png';
imagepng($canvas, $path_to_save);
if (isset($_POST['frame_text']) && (!empty($_POST['frame_text']))) {
    $text = $_POST['frame_text'];
    $words = strlen($text);
    $img = new textPainter($path_to_save, $text, '../fonts/arial.ttf', 60);
    if ($f_id == '53') {
        $img->setPosition("center", "2090");
        $img->setTextColor(0, 0, 0);
        $img->setQuality(100);
    }else if ($f_id == '54') {
        $img->setPosition("center", "1115");
        $img->setTextColor(0, 0, 0);
        $img->setQuality(100);
    }
    else if ($f_id == '55') {
        $img->setPosition("center", "2065");
        $img->setTextColor(0, 0, 0);
        $img->setQuality(100);
    }
    $img->show($path_to_save);
    $canvas = @imagecreatefrompng($path_to_save);
    imagepng($canvas);
} else {
    imagepng($canvas);
}
?>