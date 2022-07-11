<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MIE_Flash;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FlashExposureComp extends AbstractTagGroup
{

  protected string $id = 'MIE-Flash:FlashExposureComp';

  protected string $name = 'FlashExposureComp';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Flash Exposure Comp',
    'fr' => 'Compensation d\'exposition au flash',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MIE::Flash
       * line : 163706
       * type : rational64s
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'MIE::Flash.MIE-Flash:FlashExposureComp',
      'desc' => [
        'en' => 'Flash Exposure Comp',
        'fr' => 'Compensation d\'exposition au flash',
      ],
    ],
  ];

}
