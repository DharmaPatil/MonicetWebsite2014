$(document).ready(function(){
    //initial state
    var opposite_to_smooth = '#identify_form_choices_irregular, #identify_form_choices_cutted_point, #identify_form_choices_cutted_point_left, #identify_form_choices_cutted_point_right, #identify_form_user_mark_from_vertical, #identify_form_user_mark_to_vertical, #identify_form_user_mark_strict_vertical, #identify_form_user_mark_from_horizontal, #identify_form_user_mark_to_horizontal, #identify_form_choices_smooth_without, #identify_form_choices_irregular_without, #identify_form_choices_cutted_point_without, #identify_form_choices_cutted_point_left_without, #identify_form_choices_cutted_point_right_without';
    var with_group = '#identify_form_choices_smooth, #identify_form_choices_irregular, #identify_form_choices_cutted_point, #identify_form_choices_cutted_point_left, #identify_form_choices_cutted_point_right';
    var without_group = '#identify_form_choices_smooth_without, #identify_form_choices_irregular_without, #identify_form_choices_cutted_point_without, #identify_form_choices_cutted_point_left_without, #identify_form_choices_cutted_point_right_without';
    var user_mark_group = '#identify_form_user_mark_from_vertical, #identify_form_user_mark_to_vertical, #identify_form_user_mark_strict_vertical, #identify_form_user_mark_from_horizontal, #identify_form_user_mark_to_horizontal';
    
    //define complete caracterization as default
    $('#identify_form_choices_same').attr('checked','checked');
    $('#identify_form_choices_best').attr('checked','checked');
    $('#identify_form_choices_same_body_part').attr('checked','checked');
    $(with_group).removeAttr("checked");
    $(with_group).attr("disabled", "disabled");
    $(without_group).removeAttr("checked");
    $(without_group).attr("disabled", "disabled");
    $(user_mark_group).removeAttr("checked");
    $(user_mark_group).attr("disabled", "disabled");

    //switch between complete or partial
    $('#identify_form_choices_same').change(function(){
        if($('#identify_form_choices_same').attr('checked') == true){
            $(with_group).removeAttr("checked");
            $(with_group).attr("disabled", "disabled");
            $(without_group).removeAttr("checked");
            $(without_group).attr("disabled", "disabled");
            $(user_mark_group).removeAttr("checked");
            $(user_mark_group).attr("disabled", "disabled");
        } else {
            $(with_group).removeAttr("disabled");
            $(without_group).removeAttr("disabled");
            $(user_mark_group).removeAttr("disabled");

            var description = $('#identify_description');
            if( (description.html().indexOf("Lisa") !== -1) ){
                $(opposite_to_smooth).removeAttr("checked");
                $(opposite_to_smooth).attr("disabled", "disabled");
                $(without_group).removeAttr("checked");
                $(without_group).attr("disabled", "disabled");
                $(user_mark_group).removeAttr("checked");
                $(user_mark_group).attr("disabled", "disabled");
                $('#identify_form_choices_smooth').attr('checked', true);
            }
        }
    });

    //switch between smooth and irregular
    $('#identify_form_choices_smooth').change(function(){
        if($('#identify_form_choices_smooth').attr('checked') == true){
            $(opposite_to_smooth).removeAttr("checked");
            $(opposite_to_smooth).attr("disabled", "disabled");
        } else {
            $(opposite_to_smooth).removeAttr("disabled");
        }
    });

    //with disables the without and vice-versa (the first scenario when lisa disables without lisa is already done above)
    $('#identify_form_choices_smooth_without').change(function(){
        if($('#identify_form_choices_smooth_without').attr('checked') == true){
            $('#identify_form_choices_smooth').removeAttr("checked");
            $('#identify_form_choices_smooth').attr("disabled", "disabled");
        } else {
            $('#identify_form_choices_smooth').removeAttr("disabled");
        }
    });

    $('#identify_form_choices_irregular').change(function(){
        if($('#identify_form_choices_irregular').attr('checked') == true){
            $('#identify_form_choices_irregular_without').removeAttr("checked");
            $('#identify_form_choices_irregular_without').attr("disabled", "disabled");
        } else {
            $('#identify_form_choices_irregular_without').removeAttr("disabled");
        }
    });

    $('#identify_form_choices_irregular_without').change(function(){
        if($('#identify_form_choices_irregular_without').attr('checked') == true){
            $('#identify_form_choices_irregular').removeAttr("checked");
            $('#identify_form_choices_irregular').attr("disabled", "disabled");
        } else {
            $('#identify_form_choices_irregular').removeAttr("disabled");
        }
    });
    
    $('#identify_form_choices_cutted_point').change(function(){
        if($('#identify_form_choices_cutted_point').attr('checked') == true){
            $('#identify_form_choices_cutted_point_without').removeAttr("checked");
            $('#identify_form_choices_cutted_point_without').attr("disabled", "disabled");
        } else {
            $('#identify_form_choices_cutted_point_without').removeAttr("disabled");
        }
    });
    
    $('#identify_form_choices_cutted_point_without').change(function(){
        if($('#identify_form_choices_cutted_point_without').attr('checked') == true){
            $('#identify_form_choices_cutted_point').removeAttr("checked");
            $('#identify_form_choices_cutted_point').attr("disabled", "disabled");
        } else {
            $('#identify_form_choices_cutted_point').removeAttr("disabled");
        }
    });

    $('#identify_form_choices_cutted_point_left').change(function(){
        if($('#identify_form_choices_cutted_point_left').attr('checked') == true){
            $('#identify_form_choices_cutted_point_left_without').removeAttr("checked");
            $('#identify_form_choices_cutted_point_left_without').attr("disabled", "disabled");
        } else {
            $('#identify_form_choices_cutted_point_left_without').removeAttr("disabled");
        }
    });
    
    $('#identify_form_choices_cutted_point_left_without').change(function(){
        if($('#identify_form_choices_cutted_point_left_without').attr('checked') == true){
            $('#identify_form_choices_cutted_point_left').removeAttr("checked");
            $('#identify_form_choices_cutted_point_left').attr("disabled", "disabled");
        } else {
            $('#identify_form_choices_cutted_point_left').removeAttr("disabled");
        }
    });

    $('#identify_form_choices_cutted_point_right').change(function(){
        if($('#identify_form_choices_cutted_point_right').attr('checked') == true){
            $('#identify_form_choices_cutted_point_right_without').removeAttr("checked");
            $('#identify_form_choices_cutted_point_right_without').attr("disabled", "disabled");
        } else {
            $('#identify_form_choices_cutted_point_right_without').removeAttr("disabled");
        }
    });
    
    $('#identify_form_choices_cutted_point_right_without').change(function(){
        if($('#identify_form_choices_cutted_point_right_without').attr('checked') == true){
            $('#identify_form_choices_cutted_point_right').removeAttr("checked");
            $('#identify_form_choices_cutted_point_right').attr("disabled", "disabled");
        } else {
            $('#identify_form_choices_cutted_point_right').removeAttr("disabled");
        }
    });
    
    //show page loading gif
    $("#loader").show();
    // first ajax request
    send_ajax_request();
    
    // only send request when button pressed
    $('#submit_identify_form').click(function(){
        $("#loader").show();
        send_ajax_request();
    });
        
    $('.mark_click_listener').each(function(){
        var html = $(this).html()
        //$(this).html('<b>' + html + '</b>');
        
        $(this).click(function(){
            var id_str_parts = $(this).attr('id').split('_');
            var id = id_str_parts[2];
            if($("#identify_form_marks option[value='" + id +"']").attr("selected")){
                $("#identify_form_marks option[value='" + id +"']").removeAttr("selected");
                html = html.replace("<b>", "");
                html = html.replace("</b>", "");
                $(this).html(html);
            } else {
                $("#identify_form_marks option[value='" + id +"']").attr("selected", "selected");
                $(this).html('<b>' + html + '</b>');
            }
            //send_ajax_request();//no longer using AJAX - will, in turn be sent when $('#submit_identify_form').click
        });
   });
});


function send_ajax_request(){
    var args = $('#identify_form').serialize() + '&_rd=' + Math.random();
    $.ajax({
        url: window.location.protocol + '//' + window.location.host+'/admin.php/ajax/observation-photo/possible-matches?' + args,
        type: 'POST',
        success: function(transport, html){
            //alert(transport);
            //hide page loading gif
            $("#loader").hide();
            $('#carousel_results').html(transport);
            $('#carousel_results').liquidcarousel({height:165, duration:600, hidearrows: false});
        }
    });
}