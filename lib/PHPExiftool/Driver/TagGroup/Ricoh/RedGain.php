<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Ricoh;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RedGain extends AbstractTagGroup
{

  protected string $id = 'Ricoh:RedGain';

  protected string $name = 'RedGain';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Red Gain',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Ricoh::Text
       * line : 334150
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Ricoh::Text.Ricoh:RedGain',
      'desc' => [
        'en' => 'Red Gain',
      ],
    ],
  ];

}
