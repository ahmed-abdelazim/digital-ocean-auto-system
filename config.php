<?php
include "functions.php";
require 'vendor/autoload.php';

use DigitalOceanV2\Adapter\BuzzAdapter;
use DigitalOceanV2\DigitalOceanV2;
$token = 'ACCESS TOKEN HERE';
$imgid = 'SNAPSHOT ID HERER';
// create an adapter with your access token which can be
// generated at https://cloud.digitalocean.com/settings/applications
$adapter = new BuzzAdapter($token);

// create a digital ocean object with the previous adapter
$digitalocean = new DigitalOceanV2($adapter);
$account = $digitalocean->account();

// return the Account entity
$userInformation = $account->getUserInformation();
//print_r($userInformation);

// return the droplet api
$droplet = $digitalocean->droplet();

// return a collection of Droplet entity
$droplets = $droplet->getAll();

//print_r($renamed);
//print_r($droplets);
function require_auth() {
	$AUTH_USER = 'admin';
	$AUTH_PASS = 'admin';
	header('Cache-Control: no-cache, must-revalidate, max-age=0');
	$has_supplied_credentials = !(empty($_SERVER['PHP_AUTH_USER']) && empty($_SERVER['PHP_AUTH_PW']));
	$is_not_authenticated = (
		!$has_supplied_credentials ||
		$_SERVER['PHP_AUTH_USER'] != $AUTH_USER ||
		$_SERVER['PHP_AUTH_PW']   != $AUTH_PASS
	);
	if ($is_not_authenticated) {
		header('HTTP/1.1 401 Authorization Required');
		header('WWW-Authenticate: Basic realm="Access denied"');
		exit;
	}
}
?>