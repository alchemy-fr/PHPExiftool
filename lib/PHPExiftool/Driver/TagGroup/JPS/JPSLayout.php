<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\JPS;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class JPSLayout extends AbstractTagGroup
{

  protected string $id = 'JPS:JPSLayout';

  protected string $name = 'JPSLayout';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'JPS Layout',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : JPEG::JPS
       * line : 152856
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'JPEG::JPS.JPS:JPSLayout',
      'desc' => [
        'en' => 'JPS Layout',
      ],
    ],
    1 => [
      /**
       * table_name : JPEG::JPS
       * line : 152870
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'JPEG::JPS.JPS:JPSLayout',
      'desc' => [
        'en' => 'JPS Layout',
      ],
    ],
  ];

}
