<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sigma;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FlashExposureComp extends AbstractTagGroup
{

  protected string $id = 'Sigma:FlashExposureComp';

  protected string $name = 'FlashExposureComp';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Flash Exposure Comp',
    'fr' => 'Compensation d\'exposition au flash',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sigma::Main
       * line : 339311
       * type : rational64s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sigma::Main.Sigma:FlashExposureComp',
      'desc' => [
        'en' => 'Flash Exposure Comp',
        'fr' => 'Compensation d\'exposition au flash',
      ],
    ],
    1 => [
      /**
       * table_name : Sigma::Main
       * line : 339454
       * type : rational64s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sigma::Main.Sigma:FlashExposureComp',
      'desc' => [
        'en' => 'Flash Exposure Comp',
        'fr' => 'Compensation d\'exposition au flash',
      ],
    ],
  ];

}
