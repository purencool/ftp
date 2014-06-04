<?php
/**
 *  Description
 *
 *  @link
 *  @version
 *  @author    Purencool Website Development <purencool at gmail dot com>
 *  @license   GPLV3
 *
 * Documentation:
 * Tickets:
 */
require_once __DIR__.'/ConfigClass.php';
require_once __DIR__.'/vendor/autoload.php';


//-- Create pimple container for testing
$app = new Pimple();

//-- Add config class so that it can access ftp
$configClass = new ConfigClass();
$app['ftp.config'] = $app->protect( function() use ($configClass) {
    return $configClass;
  }
);
//-- Test to see if you can access ftp.config
//print $app['ftp.config']()->toString();

//-- Add Ftp Client to pimple container
$app['ftp.view'] = function () use ($configClass){
   return new \FtpView\FtpClient($configClass);
};
//print $app['ftp.view']->__toString();
