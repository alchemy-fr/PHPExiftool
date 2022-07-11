<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KyoceraRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Lens extends AbstractTagGroup
{

  protected string $id = 'KyoceraRaw:Lens';

  protected string $name = 'Lens';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Lens',
    'fr' => 'Objectif',
  ];

  protected int $count = 32;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : KyoceraRaw::Main
       * line : 161261
       * type : string
       * writable : false
       * count : 32
       * flags : Permanent
       */
      'id' => 'KyoceraRaw::Main.KyoceraRaw:Lens',
      'desc' => [
        'en' => 'Lens',
        'fr' => 'Objectif',
      ],
    ],
  ];

}
