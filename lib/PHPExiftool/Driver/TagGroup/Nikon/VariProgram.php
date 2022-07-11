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
class VariProgram extends AbstractTagGroup
{

  protected string $id = 'Nikon:VariProgram';

  protected string $name = 'VariProgram';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Vari Program',
    'fr' => 'Variprogramme',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::Main
       * line : 199780
       * type : string
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::Main.Nikon:VariProgram',
      'desc' => [
        'en' => 'Vari Program',
        'fr' => 'Variprogramme',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::NCTG
       * line : 203844
       * type : string
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::NCTG.Nikon:VariProgram',
      'desc' => [
        'en' => 'Vari Program',
        'fr' => 'Variprogramme',
      ],
    ],
  ];

}
