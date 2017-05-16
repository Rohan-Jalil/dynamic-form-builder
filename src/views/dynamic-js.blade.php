<?php
/**
 * Created by PhpStorm.
 * User: rohan
 * Date: 5/15/17
 * Time: 10:38 PM
 */
?>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" type="text/css" />

<script type="text/javascript">
    $(function () {
        $(".select2").select2({
            theme: "bootstrap"
        });
    });

    $(function() {
        $(".date-field").datepicker({yearRange: "1960:2020", changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy'});
    });

    var DynamicFormBuilder = {

        cloneFieldInWrapper : function (el) {
            var wrapper = $(el).closest('.field'),
                    field = wrapper.find('input:last'),
                    newField = field.clone().val('').css({'margin-top': 2}),
                    html = ['<div><div style="float: left; width: 99%">' + $('<div>').append(newField).html() + '</div><div style="color: red; cursor: pointer;" onclick="javascript:$(this).parent().remove();">&times;</div></div>'].join('');

            field.after(html);
        }
    };

</script>
