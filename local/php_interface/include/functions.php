<?php
function get_tel_from_phone (string $phone):string
{
    $phone = preg_replace('![^0-9]+!', '', $phone);
    if ($phone[0] === '8') {
        $phone[0] = 7;
    }
    return '+' . $phone;
}

function convert_space_to_url_code (string $input_string):string
{
    return preg_replace('/\s+/', '%20', $input_string);
}