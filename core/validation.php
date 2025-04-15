<?php

/****************************** require function ***************************** */
function valid_data_require($var_input_data,$key_of_var)
{
    return empty($var_input_data) ? "$key_of_var is required" : null;
}
/********************************* add title ******************************* */
function valid_add_task($title){
    $input = [
        'title' => htmlspecialchars($title),
    ];
    
    foreach($input as $key =>$value)
    {
        if(valid_data_require($value,$key)){
            return $type_of_error = valid_data_require($value,$key);
        }
    }
    return null ;
}

/***************************************************************** */