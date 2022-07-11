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
class Parameters extends AbstractTagGroup
{

  protected string $id = 'MakerNotes:Parameters';

  protected string $name = 'Parameters';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Parameters',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::INSV_MakerNotes
       * line : 314206
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::INSV_MakerNotes.MakerNotes:Parameters',
      'desc' => [
        'en' => 'Parameters',
      ],
    ],
  ];

}
