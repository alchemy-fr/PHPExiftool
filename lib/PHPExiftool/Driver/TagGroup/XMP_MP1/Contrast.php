<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_MP1;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Contrast extends AbstractTagGroup
{

  protected string $id = 'XMP-MP1:Contrast';

  protected string $name = 'Contrast';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Contrast',
    'fr' => 'Contraste',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : Microsoft::MP1
       * line : 174465
       * type : string
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'Microsoft::MP1.XMP-MP1:Contrast',
      'desc' => [
        'en' => 'Contrast',
        'fr' => 'Contraste',
      ],
    ],
  ];

}
