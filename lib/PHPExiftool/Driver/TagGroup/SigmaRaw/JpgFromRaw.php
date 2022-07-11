<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SigmaRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class JpgFromRaw extends AbstractTagGroup
{

  protected string $id = 'SigmaRaw:JpgFromRaw';

  protected string $name = 'JpgFromRaw';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Jpg From Raw',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : SigmaRaw::Main
       * line : 339939
       * type : ?
       * writable : false
       * count : 
       * flags : Binary
       */
      'id' => 'SigmaRaw::Main.SigmaRaw:JpgFromRaw',
      'desc' => [
        'en' => 'Jpg From Raw',
      ],
    ],
  ];

}
