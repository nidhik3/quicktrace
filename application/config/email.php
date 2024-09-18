<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['protocol'] = 'smtp';
$config['smtp_host'] = 'smtp.gmail.com';
$config['smtp_port'] = 587; // For Gmail use 587
$config['smtp_user'] = 'disha.20bcon249@jecrcu.edu.in'; // Your Gmail address
$config['smtp_pass'] = 'your_password'; // Your Gmail password or App password
$config['mailtype'] = 'html';
$config['charset']  = 'iso-8859-1';
$config['wordwrap'] = TRUE;

$config['smtp_crypto'] = 'tls'; // Use 'tls' for Gmail
