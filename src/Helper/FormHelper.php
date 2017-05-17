<?php
/**
 * Created by PhpStorm.
 * User: rohan
 * Date: 5/12/17
 * Time: 9:40 PM
 */

/**
 * @param $container
 * @param $key
 * @param null $defaultValue
 *
 * @return null
 */
function fetchData($container, $key, $defaultValue = null)
{
    return isset($container[$key]) ? $container[$key] : $defaultValue;
}

function getFieldID($index, $field)
{
    return isset($field['id']) ? $field['id'] : preg_replace('/[^A-Z0-9]/i', '-', $index);
}

/**
 * @param $data
 * @param $field
 *
 * @return array|null
 */

function getValue($data, $field)
{
    $result = fetchData($data, $field['name']) ? fetchData($data, $field['name']) : fetchData($field, 'default');

    switch($field['type'])
    {
        case 'checkbox-list':
            return is_array($result) ? $result : [$result];
            break;

        default:
            return $result;
            break;
    }
}

/**
 * @param $field
 * @param $container
 *
 * @return string
 */

function prepareName($field, $container)
{
    $name = "{$container}[".fetchData($field, 'name')."]";

    switch($field['type'])
    {
        case 'select':
            return isset($field['multiple']) ? "{$name}[]" : $name;
            break;

        case 'text':
            return isset($field['add-more']) ? "{$name}[]" : $name;
            break;

        default:
            return $name;
            break;
    }
}

/**
 * @param $field
 *
 * @return string
 */
function getHtmlFieldAttributes($field)
{
    $attributesString = '';
    if (isset($field['attributes']) && is_array($field['attributes']))
    {
        foreach($field['attributes'] as $k => $v) :
            $attributesString .= "data-{$k}=\"{$v}\" " ;
        endforeach;
    }

    return $attributesString;
}

/**
 * @param $field
 * @param $fieldId
 *
 * @return array
 */

function getFormFieldAttributes($field, $fieldId)
{
    $attributes = ['id' => $fieldId, 'class' => fetchData($field, 'cls')];

    if ($field['type'] == 'date')
    {
        $attributes['class'] = "form-control pull-right date-field ".fetchData($field, 'cls');

    } else if ($field['type'] == 'select')
    {
        $attributes['class'] = "select2 ".fetchData($field, 'cls');

    }

    if (isset($field['readonly']))
    {
        $attributes['readonly'] = true;
    }

    if (isset($field['disabled']))
    {
        $attributes['disabled'] = true;
    }

    if (isset($field['placeholder']))
    {
        $attributes['placeholder'] = $field['placeholder'];
    }

    if (isset($field['multiple']))
    {
        $attributes['multiple'] = $field['multiple'];
    }

    if (isset($field['required']))
    {
		$attributes['class'] = $attributes['class']. " required";
    }
	
	if (isset($field['html-required-attribute']))
    {
		$attributes['required'] = 1;
    }

    return $attributes;
}