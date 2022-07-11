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
class Brightness extends AbstractTagGroup
{

  protected string $id = 'XMP-MP1:Brightness';

  protected string $name = 'Brightness';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Brightness',
    'fr' => 'Luminosité',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : Microsoft::MP1
       * line : 174443
       * type : string
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'Microsoft::MP1.XMP-MP1:Brightness',
      'desc' => [
        'en' => 'Brightness',
        'fr' => 'Luminosité',
      ],
    ],
  ];

}
