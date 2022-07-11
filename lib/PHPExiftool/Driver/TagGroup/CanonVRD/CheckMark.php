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
class CheckMark extends AbstractTagGroup
{

  protected string $id = 'CanonVRD:CheckMark';

  protected string $name = 'CheckMark';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Check Mark',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonVRD::DR4
       * line : 80249
       * type : ?
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::DR4.CanonVRD:CheckMark',
      'desc' => [
        'en' => 'Check Mark',
      ],
    ],
    1 => [
      /**
       * table_name : CanonVRD::Ver1
       * line : 82604
       * type : int16u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::Ver1.CanonVRD:CheckMark',
      'desc' => [
        'en' => 'Check Mark',
      ],
    ],
  ];

}
