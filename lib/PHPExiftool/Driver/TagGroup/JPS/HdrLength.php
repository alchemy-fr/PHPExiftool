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
class HdrLength extends AbstractTagGroup
{

  protected string $id = 'JPS:HdrLength';

  protected string $name = 'HdrLength';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Hdr Length',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : JPEG::JPS
       * line : 152836
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'JPEG::JPS.JPS:HdrLength',
      'desc' => [
        'en' => 'Hdr Length',
      ],
    ],
  ];

}
