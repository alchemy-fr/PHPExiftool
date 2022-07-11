<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_apple_fi;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AngleInfoYaw extends AbstractTagGroup
{

  protected string $id = 'XMP-apple-fi:AngleInfoYaw';

  protected string $name = 'AngleInfoYaw';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Angle Info Yaw',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::apple_fi
       * line : 398235
       * type : integer
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::apple_fi.XMP-apple-fi:AngleInfoYaw',
      'desc' => [
        'en' => 'Angle Info Yaw',
      ],
    ],
  ];

}
