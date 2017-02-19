<?php

/**
 * @package OTMVC
 * @version 0.0.1
 * @date    2017-02-19
 * @author  Roderic Linguri <linguri@digices.com>
 * @license MIT
 */

abstract class OTMVCView
{

  /** @property *str* opening tag **/
  protected $open;
  
  /** @property *str* closing tag **/
  protected $close;
  
  /** @property *str* tag contents **/
  protected $content;
  
  /**
    * @method set content
    * @param  *str* tag contents
    **/
  public function setContent($str)
  {
    $this->content = $str;
  }

  /**
    * @method htm
    * @return *str* composed htm
    **/
  public function htm()
  {
    return $this->open.$this->content.$this->close;
  }

}
