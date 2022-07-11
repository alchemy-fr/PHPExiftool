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
class WBAdjColorTemp extends AbstractTagGroup
{

  protected string $id = 'CanonVRD:WBAdjColorTemp';

  protected string $name = 'WBAdjColorTemp';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB Adj Color Temp',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonVRD::DR4
       * line : 80384
       * type : ?
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::DR4.CanonVRD:WBAdjColorTemp',
      'desc' => [
        'en' => 'WB Adj Color Temp',
      ],
    ],
    1 => [
      /**
       * table_name : CanonVRD::Ver1
       * line : 82268
       * type : int16u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::Ver1.CanonVRD:WBAdjColorTemp',
      'desc' => [
        'en' => 'WB Adj Color Temp',
      ],
    ],
  ];

}
