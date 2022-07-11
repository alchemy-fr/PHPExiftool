<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Panasonic;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Version1 extends AbstractTagGroup
{

  protected string $id = 'Panasonic:Version1';

  protected string $name = 'Version1';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Version 1',
  ];

  protected int $count = 14;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::PANA
       * line : 279117
       * type : string
       * writable : false
       * count : 14
       * flags : Permanent
       */
      'id' => 'Panasonic::PANA.Panasonic:Version1',
      'desc' => [
        'en' => 'Version 1',
      ],
    ],
  ];

}
