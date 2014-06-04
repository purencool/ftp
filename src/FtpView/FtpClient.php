<?php
/**
 *  Description
 *
 *  @link
 *  @version
 *  @author    Purencool Website Development <purencool at gmail dot com>
 *  @license   GPLV3
 *
 *  Documentation:
 *  Tickets:
 */
namespace FtpView;

class FtpClient extends FtpClientAbstract
{ 
  /**
   *  @var Object that holds ftp client config
   */
  private $ftpClientConfig;
  
  /**
   *  @var Object Description
   */
  private $connectionObj;
  
  
  /**
   *  Ftp client configuration
   *  
   *  @param Object $ftpClientConfig injecting configuration
   *  
   */
  public function __construct($ftpClientConfig = NULL) {
    $this->ftpClientConfig = $ftpClientConfig;
  }
  
  
  /**
   * Starting ftp connection to see if it works
   * 
   * @param string $url url for ftp connection
   * @return boolean connection is open true or false
   */  
   public function connection($url = NULL) 
   {
       return $url;
   }
   
  /**
   * Open ftp connection and returning true or false
   * 
   * @return boolean connection is open true or false
   */  
   public function getConnection() 
   {
       
   }
   
  /**
   * Closing ftp connection and returning true or false
   * 
   * @return boolean connection was closed true or false
   */ 
   public function getCloseConnection()
   {
       
   }
   
   public function testing()
   {
     return $this->ftpClientConfig;
   }
   
   
   public function __toString()
   {
     return 'FtpView\FtpClient';
   }
}

