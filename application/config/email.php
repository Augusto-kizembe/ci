<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
    'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
    'smtp_host' => 'mail.eduiba.com', 
    'smtp_port' => 465,
    'smtp_user' => 'suport@eduiba.com',
    'smtp_pass' => 'suport.eduiba.com',
    'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
    'mailtype' => 'html', //plaintext 'text' mails or 'html'
    'smtp_timeout' => '60', //in seconds
    'charset' => 'utf-8',
    'wordwrap' => TRUE
);