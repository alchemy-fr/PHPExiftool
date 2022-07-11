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
class FNumber extends AbstractTagGroup
{

  protected string $id = 'Sigma:FNumber';

  protected string $name = 'FNumber';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'F Number',
    'fr' => 'Nombre F',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sigma::Main
       * line : 339233
       * type : rational64u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sigma::Main.Sigma:FNumber',
      'desc' => [
        'en' => 'F Number',
        'fr' => 'Nombre F',
      ],
    ],
    1 => [
      /**
       * table_name : Sigma::Main
       * line : 339368
       * type : rational64u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sigma::Main.Sigma:FNumber',
      'desc' => [
        'en' => 'F Number',
        'fr' => 'Nombre F',
      ],
    ],
  ];

}
