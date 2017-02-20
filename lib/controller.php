<?php

/**
 * @package OTMVC
 * @version 0.0.1
 * @date    2017-02-19
 * @author  Roderic Linguri <linguri@digices.com>
 * @license MIT
 */

abstract class OTMVCController
{

  /** @property *arr* objects **/
  protected $objects;

  /** @property *obj* table **/
  protected $table;

  /** @property *obj* model **/
  protected $model;
  
  /** @property *obj* view **/
  protected $view;
  
  /** 
    * @method model getter
    * @return *obj* model
    **/
  public function model()
  {
    return $this->model;
  }
  
  /** 
    * @method view getter
    * @return *obj* model
    **/
  public function view()
  {
    return $this->view;
  }

}
