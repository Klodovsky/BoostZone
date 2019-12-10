<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
|  Google API Configuration
| -------------------------------------------------------------------
| 
| To get API details you have to create a Google Project
| at Google API Console (https://console.developers.google.com)
| 
|  client_id         string   Your Google API Client ID.
|  client_secret     string   Your Google API Client secret.
|  redirect_uri      string   URL to redirect back to after login.
|  application_name  string   Your Google application name.
|  api_key           string   Developer key.
|  scopes            string   Specify scopes
*/
$config['google']['client_id']        = '455463811217-0m4ruai9qclualqde1tvj6c2hfpglrl4.apps.googleusercontent.com';
$config['google']['client_secret']    = 'JbYeEFxI081QCeT1h_Qqwcnt';
$config['google']['redirect_uri']     = base_url().'register';
$config['google']['application_name'] = 'BoostZone';
$config['google']['api_key']          = 'AIzaSyCmrDJfYyMYmj_PXBYiV4qCzIAWbaVuxCY';
$config['google']['scopes']           = array();