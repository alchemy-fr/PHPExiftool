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
class CasioQuality extends AbstractTagGroup
{

  protected string $id = 'Casio:CasioQuality';

  protected string $name = 'CasioQuality';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Casio Quality',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Casio::QVCI
       * line : 85186
       * type : int8u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Casio::QVCI.Casio:CasioQuality',
      'desc' => [
        'en' => 'Casio Quality',
      ],
    ],
  ];

}
