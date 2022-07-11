<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Description extends AbstractTagGroup
{

  protected string $id = 'RIFF:Description';

  protected string $name = 'Description';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Description',
  ];

  protected int $count = 256;

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::BroadcastExt
       * line : 328105
       * type : string
       * writable : false
       * count : 256
       * flags : 
       */
      'id' => 'RIFF::BroadcastExt.RIFF:Description',
      'desc' => [
        'en' => 'Description',
      ],
    ],
  ];

}
