<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MIE_Extender;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExtenderMagnification extends AbstractTagGroup
{

  protected string $id = 'MIE-Extender:ExtenderMagnification';

  protected string $name = 'ExtenderMagnification';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Extender Magnification',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MIE::Extender
       * line : 163683
       * type : rational64s
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'MIE::Extender.MIE-Extender:ExtenderMagnification',
      'desc' => [
        'en' => 'Extender Magnification',
      ],
    ],
  ];

}
