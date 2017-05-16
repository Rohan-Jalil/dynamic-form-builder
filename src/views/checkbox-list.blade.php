<?php
/**
 * Created by PhpStorm.
 * User: rohan
 * Date: 5/12/17
 * Time: 4:54 PM
 */
?>

<ul class="check-box-list">
    @foreach ($listValues as $k => $l)
        @php $attributes['id'] = $fieldId."-".$k  @endphp
    <li>
        {{ Form::checkbox("{$name}[]", $k, ($value && in_array($k, $value)), $attributes) }}
        {{  Form::label($k, $l) }}
    </li>
    @endforeach
</ul>
