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
class IHL_EXIF extends AbstractTagGroup
{

  protected string $id = 'CanonVRD:IHL_EXIF';

  protected string $name = 'IHL_EXIF';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'IHL EXIF',
  ];

  protected int $count = 0;

  protected int $flags = 34;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonVRD::IHL
       * line : 82043
       * type : ?
       * writable : false
       * count : 
       * flags : Binary,Unknown
       */
      'id' => 'CanonVRD::IHL.CanonVRD:IHL_EXIF',
      'desc' => [
        'en' => 'IHL EXIF',
      ],
    ],
  ];

}
