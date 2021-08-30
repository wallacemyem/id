<?php

use Illuminate\Support\Facades\Auth;

function avatar($seed){
        $avatar = 'https://avatars.dicebear.com/api/human/'.$seed.'.svg';
        return $avatar;
}

function name_explode($value){

    $get_name = explode(' ', $value, 2)[0];
    return $get_name;

}

function qrcode($string){
    return \QR_Code\QR_Code::svg($string, false, 'L', 1);
}

