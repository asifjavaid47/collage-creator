<?php
function images_settings($source, $radius, $img_name){
    $colour = "FFFFFF";
    list($source_width, $source_height, $source_type) = getimagesize($source);
    switch ($source_type) {
        case IMAGETYPE_GIF:
            $source_image = imagecreatefromgif($source);
            break;
        case IMAGETYPE_JPEG:
            $source_image = imagecreatefromjpeg($source);
            break;
        case IMAGETYPE_PNG:
            $source_image = imagecreatefrompng($source);
            break;
    }
    $corner_image = imagecreatetruecolor(
            $radius, $radius
    );

    $clear_colour = imagecolorallocate(
            $corner_image, 0, 0, 0
    );

    $solid_colour = imagecolorallocate(
            $corner_image, hexdec(substr($colour, 0, 2)), hexdec(substr($colour, 2, 2)), hexdec(substr($colour, 4, 2))
    );

    imagecolortransparent(
            $corner_image, $clear_colour
    );

    imagefill(
            $corner_image, 0, 0, $solid_colour
    );

    imagefilledellipse(
            $corner_image, $radius, $radius, $radius * 2, $radius * 2, $clear_colour
    );

    imagecopymerge(
            $source_image, $corner_image, 0, 0, 0, 0, $radius, $radius, 100
    );

    $corner_image = imagerotate($corner_image, 90, 0);

    imagecopymerge(
            $source_image, $corner_image, 0, $source_height - $radius, 0, 0, $radius, $radius, 100
    );

    $corner_image = imagerotate($corner_image, 90, 0);

    imagecopymerge(
            $source_image, $corner_image, $source_width - $radius, $source_height - $radius, 0, 0, $radius, $radius, 100
    );

    $corner_image = imagerotate($corner_image, 90, 0);

    imagecopymerge(
            $source_image, $corner_image, $source_width - $radius, 0, 0, 0, $radius, $radius, 100
    );
    
    //header("Content-type: image/png");
    imagepng($source_image, '../frames_round/' . $img_name);
}
?>