<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonVRD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DR4CameraModel extends AbstractTagGroup
{

  protected string $id = 'CanonVRD:DR4CameraModel';

  protected string $name = 'DR4CameraModel';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'DR4 Camera Model',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonVRD::DR4Header
       * line : 80942
       * type : int32u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::DR4Header.CanonVRD:DR4CameraModel',
      'desc' => [
        'en' => 'DR4 Camera Model',
      ],
    ],
  ];

}
