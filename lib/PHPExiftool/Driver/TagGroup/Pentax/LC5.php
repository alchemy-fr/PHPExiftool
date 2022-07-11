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
class LC5 extends AbstractTagGroup
{

  protected string $id = 'Pentax:LC5';

  protected string $name = 'LC5';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'LC5',
    'fr' => 'Données de correction d\'aberration chromatique',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::LensData
       * line : 289083
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Pentax::LensData.Pentax:LC5',
      'desc' => [
        'en' => 'LC5',
        'fr' => 'Données de correction d\'aberration chromatique',
      ],
    ],
  ];

}
