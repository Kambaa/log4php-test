<?php
/**
 * Created by PhpStorm.
 * User: yg
 * Date: 6/28/16
 * Time: 2:39 PM
 */
require_once('../vendor/autoload.php');

Logger::configure('log4phpconfig.xml');


$logger = Logger::getLogger("main");


// Start logging
$logger->trace("My first message.");   // Not logged because TRACE < WARN
$logger->debug("My second message.");  // Not logged because DEBUG < WARN
$logger->info("My third message.");    // Not logged because INFO < WARN
$logger->warn("My fourth message.");   // Logged because WARN >= WARN
$logger->error("My fifth message.");   // Logged because ERROR >= WARN
$logger->fatal("My sixth message.");   // Logged because FATAL >= WARN