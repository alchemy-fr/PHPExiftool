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
class Originator extends AbstractTagGroup
{

  protected string $id = 'RIFF:Originator';

  protected string $name = 'Originator';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Originator',
  ];

  protected int $count = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::BroadcastExt
       * line : 328117
       * type : string
       * writable : false
       * count : 32
       * flags : 
       */
      'id' => 'RIFF::BroadcastExt.RIFF:Originator',
      'desc' => [
        'en' => 'Originator',
      ],
    ],
  ];

}
