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


interface FtpClientInterface
{
  /**
   * Starting ftp connection to see if it works
   * 
   * @param string $url url for ftp connection
   * @return boolean connection is open true or false
   */  
   public function connection($url = NULL);
   
  /**
   * Open ftp connection and returning true or false
   * 
   * @return boolean connection is open true or false
   */  
   public function getConnection(); 
   
  /**
   * Closing ftp connection and returning true or false
   * 
   * @return boolean connection was closed true or false
   */ 
   public function getCloseConnection();
}           
