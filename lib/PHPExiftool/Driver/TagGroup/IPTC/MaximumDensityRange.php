<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IPTC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MaximumDensityRange extends AbstractTagGroup
{

  protected string $id = 'IPTC:MaximumDensityRange';

  protected string $name = 'MaximumDensityRange';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Maximum Density Range',
    'fr' => 'Etendue maximale de densité',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::NewsPhoto
       * line : 152251
       * type : int16u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'IPTC::NewsPhoto.IPTC:MaximumDensityRange',
      'desc' => [
        'en' => 'Maximum Density Range',
        'fr' => 'Etendue maximale de densité',
      ],
    ],
  ];

}
