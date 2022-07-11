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
class ArtModeParameters extends AbstractTagGroup
{

  protected string $id = 'Casio:ArtModeParameters';

  protected string $name = 'ArtModeParameters';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Art Mode Parameters',
  ];

  protected int $count = 3;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Casio::Type2
       * line : 89992
       * type : int8u
       * writable : true
       * count : 3
       * flags : Permanent
       */
      'id' => 'Casio::Type2.Casio:ArtModeParameters',
      'desc' => [
        'en' => 'Art Mode Parameters',
      ],
    ],
  ];

}
