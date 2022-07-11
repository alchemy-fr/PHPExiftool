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
class InterchangeColorSpace extends AbstractTagGroup
{

  protected string $id = 'IPTC:InterchangeColorSpace';

  protected string $name = 'InterchangeColorSpace';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Interchange Color Space',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::NewsPhoto
       * line : 151879
       * type : int8u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'IPTC::NewsPhoto.IPTC:InterchangeColorSpace',
      'desc' => [
        'en' => 'Interchange Color Space',
      ],
    ],
  ];

}
