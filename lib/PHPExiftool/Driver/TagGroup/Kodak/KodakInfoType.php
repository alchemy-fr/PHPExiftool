<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class KodakInfoType extends AbstractTagGroup
{

  protected string $id = 'Kodak:KodakInfoType';

  protected string $name = 'KodakInfoType';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Kodak Info Type',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::CameraInfo
       * line : 154722
       * type : string
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::CameraInfo.Kodak:KodakInfoType',
      'desc' => [
        'en' => 'Kodak Info Type',
      ],
    ],
  ];

}
