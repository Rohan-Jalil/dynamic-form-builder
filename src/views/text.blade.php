<?php
/**
 * Created by PhpStorm.
 * User: rohan
 * Date: 5/12/17
 * Time: 3:52 PM
 */

$supportsAddMore = fetchData($field, 'add-more');
$cssClass = fetchData($field, 'cls');
?>


@if ($value && $value && is_array($value))

    @foreach( $defaultValue as $v)
        {{ Form::text("{$name}[]", $v, ['readonly' => true, 'disable' => true, 'id' => $fieldId, 'class' => "$cssClass" ] ) }}
    @endforeach

@else
    {{ Form::text($name, $value, $attributes ) }}
@endif

@if ($supportsAddMore)
    <div style="text-align: right">
        <a href="javascript:;" class="add-row" onclick="DynamicFormBuilder.cloneFieldInWrapper(this)">Add More</a>
    </div>
@endif




