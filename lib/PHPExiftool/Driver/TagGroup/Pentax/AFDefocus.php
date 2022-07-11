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
class AFDefocus extends AbstractTagGroup
{

  protected string $id = 'Pentax:AFDefocus';

  protected string $name = 'AFDefocus';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF Defocus',
    'fr' => 'Défocalisation AF',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::AFInfo
       * line : 283804
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::AFInfo.Pentax:AFDefocus',
      'desc' => [
        'en' => 'AF Defocus',
        'fr' => 'Défocalisation AF',
      ],
    ],
  ];

}
