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
class ROMOperationMode extends AbstractTagGroup
{

  protected string $id = 'CanonRaw:ROMOperationMode';

  protected string $name = 'ROMOperationMode';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'ROM Operation Mode',
  ];

  protected int $count = 8;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonRaw::Main
       * line : 78686
       * type : string
       * writable : true
       * count : 8
       * flags : Permanent
       */
      'id' => 'CanonRaw::Main.CanonRaw:ROMOperationMode',
      'desc' => [
        'en' => 'ROM Operation Mode',
      ],
    ],
  ];

}
