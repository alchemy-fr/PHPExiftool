<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FlashExposureComp4 extends AbstractTagGroup
{

  protected string $id = 'Nikon:FlashExposureComp4';

  protected string $name = 'FlashExposureComp4';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Flash Exposure Comp 4',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::FlashInfo0103
       * line : 194382
       * type : int8s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::FlashInfo0103.Nikon:FlashExposureComp4',
      'desc' => [
        'en' => 'Flash Exposure Comp 4',
      ],
    ],
  ];

}
