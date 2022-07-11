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
class CanonFlashInfo extends AbstractTagGroup
{

  protected string $id = 'CanonRaw:CanonFlashInfo';

  protected string $name = 'CanonFlashInfo';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Canon Flash Info',
  ];

  protected int $count = 4;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonRaw::Main
       * line : 78764
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent,Unknown
       */
      'id' => 'CanonRaw::Main.CanonRaw:CanonFlashInfo',
      'desc' => [
        'en' => 'Canon Flash Info',
      ],
    ],
  ];

}
