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
class RecordMode extends AbstractTagGroup
{

  protected string $id = 'Casio:RecordMode';

  protected string $name = 'RecordMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Record Mode',
    'fr' => 'Mode d\'enregistrement',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Casio::Type2
       * line : 85979
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Casio::Type2.Casio:RecordMode',
      'desc' => [
        'en' => 'Record Mode',
        'fr' => 'Mode d\'enregistrement',
      ],
    ],
  ];

}
