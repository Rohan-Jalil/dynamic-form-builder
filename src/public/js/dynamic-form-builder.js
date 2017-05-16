/**
 * Created by rohan on 5/16/17.
 */

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