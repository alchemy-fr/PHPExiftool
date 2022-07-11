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
class IPTC extends AbstractTagGroup
{

  protected string $id = 'IPTC:IPTC';

  protected string $name = 'IPTC';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'IPTC',
  ];

  protected int $count = 0;

  protected int $flags = 18;

  protected array $tags = [
    0 => [
      /**
       * table_name : Extra
       * line : 121748
       * type : ?
       * writable : true
       * count : 
       * flags : Binary,Unsafe
       */
      'id' => 'Extra.IPTC:IPTC',
      'desc' => [
        'en' => 'IPTC',
      ],
    ],
  ];

}
