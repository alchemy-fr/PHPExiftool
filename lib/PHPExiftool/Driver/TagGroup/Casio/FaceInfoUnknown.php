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
class FaceInfoUnknown extends AbstractTagGroup
{

  protected string $id = 'Casio:FaceInfoUnknown';

  protected string $name = 'FaceInfoUnknown';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Face Info Unknown',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Casio::Type2
       * line : 85966
       * type : ?
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Casio::Type2.Casio:FaceInfoUnknown',
      'desc' => [
        'en' => 'Face Info Unknown',
      ],
    ],
  ];

}
