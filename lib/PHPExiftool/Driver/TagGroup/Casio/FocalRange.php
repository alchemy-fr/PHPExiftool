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
class FocalRange extends AbstractTagGroup
{

  protected string $id = 'Casio:FocalRange';

  protected string $name = 'FocalRange';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Focal Range',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Casio::QVCI
       * line : 85205
       * type : int8u
       * writable : false
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Casio::QVCI.Casio:FocalRange',
      'desc' => [
        'en' => 'Focal Range',
      ],
    ],
  ];

}
