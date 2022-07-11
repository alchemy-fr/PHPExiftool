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
class WhiteBalanceAdj extends AbstractTagGroup
{

  protected string $id = 'CanonVRD:WhiteBalanceAdj';

  protected string $name = 'WhiteBalanceAdj';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'White Balance Adj',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonVRD::DR4
       * line : 80300
       * type : ?
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::DR4.CanonVRD:WhiteBalanceAdj',
      'desc' => [
        'en' => 'White Balance Adj',
      ],
    ],
    1 => [
      /**
       * table_name : CanonVRD::Ver1
       * line : 82184
       * type : int16u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::Ver1.CanonVRD:WhiteBalanceAdj',
      'desc' => [
        'en' => 'White Balance Adj',
      ],
    ],
  ];

}
