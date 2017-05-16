<?php
/**
 * Created by PhpStorm.
 * User: rohan
 * Date: 5/12/17
 * Time: 4:14 PM
 */
?>



<div class="input-group date">
    <div class="input-group-addon">
        <i class="fa fa-calendar"></i>'
    </div>
    {{ Form::text($name, $value, $attributes ) }}
    <script type="text/javascript">
        $(function() {
            $(".date-field").datepicker({yearRange: "1960:2020", changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy'});
        });
    </script>
</div>
