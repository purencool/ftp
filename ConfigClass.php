<?php
/**
 *  Description adding final public static methods that have the ftp
 *  login details
 *
 *  @link
 *  @version
 *  @author    Purencool Website Development <purencool at gmail dot com>
 *  @license   GPLV3
 *
 * Documentation:
 * Tickets:
 */
class ConfigClass
{
  final public function  __construct() { }
  
  /**
   *  Ftp client configuration 
   *  @return url for ftp client connection
   *  
   */
  final public static function url(){
    return 'ftp.beautifullife.net.au';
  }
  
  final public static function toString(){
    return 'ConfigClassTest';
  }
  

}
