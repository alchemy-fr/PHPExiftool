<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonVRD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ContrastAdj extends AbstractTagGroup
{

  protected string $id = 'CanonVRD:ContrastAdj';

  protected string $name = 'ContrastAdj';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Contrast Adj',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonVRD::DR4
       * line : 80478
       * type : ?
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::DR4.CanonVRD:ContrastAdj',
      'desc' => [
        'en' => 'Contrast Adj',
      ],
    ],
    1 => [
      /**
       * table_name : CanonVRD::Ver1
       * line : 82419
       * type : int8s
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::Ver1.CanonVRD:ContrastAdj',
      'desc' => [
        'en' => 'Contrast Adj',
      ],
    ],
  ];

}
