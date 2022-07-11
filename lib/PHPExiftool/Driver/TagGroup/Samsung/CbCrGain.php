<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Samsung;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CbCrGain extends AbstractTagGroup
{

  protected string $id = 'Samsung:CbCrGain';

  protected string $name = 'CbCrGain';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Cb Cr Gain',
  ];

  protected int $count = 2;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Samsung::Type2
       * line : 335936
       * type : int32u
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Samsung::Type2.Samsung:CbCrGain',
      'desc' => [
        'en' => 'Cb Cr Gain',
      ],
    ],
  ];

}
