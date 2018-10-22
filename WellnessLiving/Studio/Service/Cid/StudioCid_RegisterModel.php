<?php

namespace WellnessLiving\Studio\Service\Cid;

use WellnessLiving\WlModelAbstract;

/**
 * Allows to register a new CID class.
 *
 * This API endpoint is only available for Studio personnel and bots.
 */
class StudioCid_RegisterModel extends WlModelAbstract
{
  /**
   * Name of the class to register.
   *
   * @post post
   * @var string
   */
  public $s_class;

  /**
   * CID of registered class.
   *
   * @post result
   * @var int
   */
  public $cid;
}

?>