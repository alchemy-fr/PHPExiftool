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
class LensFStops extends AbstractTagGroup
{

  protected string $id = 'Pentax:LensFStops';

  protected string $name = 'LensFStops';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Lens F Stops',
    'fr' => 'Nombre de diaphs de l\'objectif',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::LensData
       * line : 288953
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::LensData.Pentax:LensFStops',
      'desc' => [
        'en' => 'Lens F Stops',
        'fr' => 'Nombre de diaphs de l\'objectif',
      ],
    ],
  ];

}
