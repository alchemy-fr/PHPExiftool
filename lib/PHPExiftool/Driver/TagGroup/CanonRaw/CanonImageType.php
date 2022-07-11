<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CanonImageType extends AbstractTagGroup
{

  protected string $id = 'CanonRaw:CanonImageType';

  protected string $name = 'CanonImageType';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Canon Image Type',
  ];

  protected int $count = 32;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonRaw::Main
       * line : 78700
       * type : string
       * writable : true
       * count : 32
       * flags : Permanent
       */
      'id' => 'CanonRaw::Main.CanonRaw:CanonImageType',
      'desc' => [
        'en' => 'Canon Image Type',
      ],
    ],
  ];

}
