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
class AuxiliaryLens extends AbstractTagGroup
{

  protected string $id = 'Nikon:AuxiliaryLens';

  protected string $name = 'AuxiliaryLens';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Auxiliary Lens',
    'fr' => 'Objectif Auxiliaire',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::Main
       * line : 197532
       * type : string
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::Main.Nikon:AuxiliaryLens',
      'desc' => [
        'en' => 'Auxiliary Lens',
        'fr' => 'Objectif Auxiliaire',
      ],
    ],
  ];

}
