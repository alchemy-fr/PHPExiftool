<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExternalFlashExposureComp extends AbstractTagGroup
{

  protected string $id = 'Pentax:ExternalFlashExposureComp';

  protected string $name = 'ExternalFlashExposureComp';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'External Flash Exposure Comp',
    'fr' => 'Compensation d\'exposition flash externe',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::FlashInfo
       * line : 288545
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::FlashInfo.Pentax:ExternalFlashExposureComp',
      'desc' => [
        'en' => 'External Flash Exposure Comp',
        'fr' => 'Compensation d\'exposition flash externe',
      ],
    ],
  ];

}
