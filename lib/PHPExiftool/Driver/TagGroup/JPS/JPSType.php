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
class JPSType extends AbstractTagGroup
{

  protected string $id = 'JPS:JPSType';

  protected string $name = 'JPSType';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'JPS Type',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : JPEG::JPS
       * line : 152887
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'JPEG::JPS.JPS:JPSType',
      'desc' => [
        'en' => 'JPS Type',
      ],
    ],
  ];

}
