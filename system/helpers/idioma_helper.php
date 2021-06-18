<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('idiomaCheng'))
{
    function idiomaCheng($idioma)
     
    {
        $CI = & get_instance(); 
        $CI->session->set_userdata([
            'idioma' => [
                'designacao' => $idioma
            ]
        ]); 
         
    }
}
