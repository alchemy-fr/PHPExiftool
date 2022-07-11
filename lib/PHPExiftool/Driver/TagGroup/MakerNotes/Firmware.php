<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MakerNotes;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Firmware extends AbstractTagGroup
{

  protected string $id = 'MakerNotes:Firmware';

  protected string $name = 'Firmware';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Firmware',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::INSV_MakerNotes
       * line : 314200
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::INSV_MakerNotes.MakerNotes:Firmware',
      'desc' => [
        'en' => 'Firmware',
      ],
    ],
  ];

}
