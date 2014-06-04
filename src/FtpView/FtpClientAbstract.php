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
namespace FtpView;

abstract class FtpClientAbstract implements FtpClientInterface
{
  /**
   * Starting ftp connection to see if it works
   * 
   * @param string $url url for ftp connection
   * @return boolean connection is open true or false
   */  
   abstract public function connection($url = NULL);
   
  /**
   * Open ftp connection and returning true or false
   * 
   * @return boolean connection is open true or false
   */  
   abstract public function getConnection(); 
   
  /**
   * Closing ftp connection and returning true or false
   * 
   * @return boolean connection was closed true or false
   */ 
   abstract public function getCloseConnection();
}
