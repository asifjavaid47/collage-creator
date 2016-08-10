///////1.php////////////
$(document).ready(function () {
    $("#page_1").click(function () {
        $("div.one").replaceWith("<input type='text' id='frametext' class='frametext form-control' maxlength='20' style='text-align:center;' name='text'/>");
        $("#frametext").focus();
        $("#frametext").css("border","");
        $("#frametext").css("box-shadow","");
    });
    $(".c-text-1").click(function () {
        $("div.on").html("<input type='text' id='frametext' class='frametext form-control' maxlength='20' style='text-align:center;' name='text'/>");
    });
});
$(document).on('blur', 'input.frametext', function () {
    var text = $("#frametext").val();
    $("#frame_text").val(text);
        $("#frametext").css("border","none");
        $("#frametext").css("box-shadow","none");
});
///////////////3.php////////////////
/////////////2.php////////////////
$(document).ready(function () {
    $("#page_2").click(function () {
        $("div.seconds").replaceWith("<input type='text' id='frametext' class='frametext form-control' maxlength='15'  style='text-align:center;' name='text'/>");
        $("#frametext").focus();
        $("#frametext").css("border","");
        $("#frametext").css("box-shadow","");
    });
    $(".c-text-2").click(function () {
        $("div.seconds").html("<input type='text'  id='frametext' class='frametext form-control' maxlength='15'  style='text-align:center;' name='text'/>");
    });
});
$(document).on('blur', 'input.frametext', function () {
    var text = $("#frametext").val();
    $("#frame_text").val(text);
        $("#frametext").css("border","none");
        $("#frametext").css("box-shadow","none");
});
////////3.php/////////////////

$(document).ready(function () {
    $("#tex_p").click(function () {
        $("div.second").replaceWith("<input type='text' class='frametext form-control' maxlength='20'  style='text-align:center;' id='frametext' name='text'/>");
        $("#frametext").focus();
        $("#frametext").css("border","");
        $("#frametext").css("box-shadow","");
    });
    $(".c-text-3").click(function () {
        $("div.second").html("<input type='text' id='frametext' class='frametext form-control' maxlength='20'  style='text-align:center;' name='text'/>");
    });
});
$(document).on('blur', 'input.frametext', function () {
    var text = $("#frametext").val();
    $("#frame_text").val(text);
$("#frametext").css("border","none");
$("#frametext").css("box-shadow","none");
});
///////////4.php/////////////
//    $(document).ready(function () {
//        $("#page_1").click(function () {
//            $("div.one").replaceWith("<input type='text' id='frametext' class='frametext form-control' maxlength='40' style='text-align:center;' name='text'/>");
//        });
//        $(".c-text-1").click(function () {
//            $("div.on").html("<input type='text' id='frametext' class='frametext form-control' maxlength='40' style='text-align:center;' name='text'/>");
//        });
//    });
//    $(document).on('blur', 'input.frametext', function () {
//        var text = $("#frametext").val();
//        $("#frame_text").val(text);
//        $("#frametext").css("border","none");
//        $("#frametext").css("box-shadow","none");
//    });

