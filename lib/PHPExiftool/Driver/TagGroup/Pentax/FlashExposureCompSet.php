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
class FlashExposureCompSet extends AbstractTagGroup
{

  protected string $id = 'Pentax:FlashExposureCompSet';

  protected string $name = 'FlashExposureCompSet';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Flash Exposure Comp. Setting',
    'fr' => 'Réglage de compensation d\'exposition au flash',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::AEInfo
       * line : 283352
       * type : int8s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::AEInfo.Pentax:FlashExposureCompSet',
      'desc' => [
        'en' => 'Flash Exposure Comp. Setting',
        'fr' => 'Réglage de compensation d\'exposition au flash',
      ],
    ],
  ];

}
