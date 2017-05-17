<?php
/**
 * Created by PhpStorm.
 * User: rohan
 * Date: 5/12/17
 * Time: 5:55 PM
 */
?>

@foreach($fields as $k => $field)

    <div class="{{ fetchData($field, 'wrapper-cls', '') }}">

        <label for="@php getFieldID($k, $field); @endphp">
            @if (isset($field['required']) && $field['required'] && !(isset($field['readonly']) && $field['readonly']))
                <span>*</span>
            @endif

            @if(isset($field['label']) && $field['label'])
                {{  $field['label'] }}
            @endif
        </label>

        <div class="field field-type-{{ fetchData($field, 'type', 'text') }}" @php echo getHtmlFieldAttributes($field); @endphp>
            @include("dynamic-form-builder::{$field['type']}", [
            'fieldId' => getFieldID($k, $field),
            'fieldKey' => $field['name'],
            'field' => $field,
            'value' => getValue($data, $field),
            'name' => prepareName($field, $container),
            'attributes' => getFormFieldAttributes($field, getFieldID($k, $field)),
            'listValues' => fetchData($field, 'values')
            ])
        </div>

    </div>

@endforeach
