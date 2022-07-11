<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IFD0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PanasonicRawVersion extends AbstractTagGroup
{

  protected string $id = 'IFD0:PanasonicRawVersion';

  protected string $name = 'PanasonicRawVersion';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Panasonic Raw Version',
    'fr' => 'Version Panasonic RAW',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PanasonicRaw::Main
       * line : 280552
       * type : undef
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'PanasonicRaw::Main.IFD0:PanasonicRawVersion',
      'desc' => [
        'en' => 'Panasonic Raw Version',
        'fr' => 'Version Panasonic RAW',
      ],
    ],
  ];

}
