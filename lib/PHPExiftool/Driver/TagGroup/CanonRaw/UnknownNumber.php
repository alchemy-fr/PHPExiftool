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
class UnknownNumber extends AbstractTagGroup
{

  protected string $id = 'CanonRaw:UnknownNumber';

  protected string $name = 'UnknownNumber';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Unknown Number',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonRaw::Main
       * line : 78890
       * type : ?
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'CanonRaw::Main.CanonRaw:UnknownNumber',
      'desc' => [
        'en' => 'Unknown Number',
      ],
    ],
  ];

}
