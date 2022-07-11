<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FocalPlaneYUnknown extends AbstractTagGroup
{

  protected string $id = 'Canon:FocalPlaneYUnknown';

  protected string $name = 'FocalPlaneYUnknown';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Focal Plane Y Unknown',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::FocalLength
       * line : 64122
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::FocalLength.Canon:FocalPlaneYUnknown',
      'desc' => [
        'en' => 'Focal Plane Y Unknown',
      ],
    ],
  ];

}
