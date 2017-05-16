<?php
/**
 * Created by PhpStorm.
 * User: rohan
 * Date: 5/12/17
 * Time: 4:49 PM
 */
?>

<ul class="radio-box-list {{ (isset($field['cls']) ? $field['cls'] : '') }}">
    @foreach ($listValues as $k => $l)
        @php $attributes['id'] = $fieldId."-".$k  @endphp
    <li>
        {{  Form::radio($name, $k, ($k == $value), $attributes) }}
        {{  Form::label($k, $l) }}
    </li>
    @endforeach
</ul>


