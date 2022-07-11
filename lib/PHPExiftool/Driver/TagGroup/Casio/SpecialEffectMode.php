<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Casio;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SpecialEffectMode extends AbstractTagGroup
{

  protected string $id = 'Casio:SpecialEffectMode';

  protected string $name = 'SpecialEffectMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Special Effect Mode',
  ];

  protected int $count = 3;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Casio::Type2
       * line : 85944
       * type : int8u
       * writable : true
       * count : 3
       * flags : Permanent
       */
      'id' => 'Casio::Type2.Casio:SpecialEffectMode',
      'desc' => [
        'en' => 'Special Effect Mode',
      ],
    ],
  ];

}
