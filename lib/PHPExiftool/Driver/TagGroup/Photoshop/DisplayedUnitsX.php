<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Photoshop;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DisplayedUnitsX extends AbstractTagGroup
{

  protected string $id = 'Photoshop:DisplayedUnitsX';

  protected string $name = 'DisplayedUnitsX';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Displayed Units X',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Photoshop::Resolution
       * line : 306115
       * type : int16u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Photoshop::Resolution.Photoshop:DisplayedUnitsX',
      'desc' => [
        'en' => 'Displayed Units X',
      ],
    ],
  ];

}
