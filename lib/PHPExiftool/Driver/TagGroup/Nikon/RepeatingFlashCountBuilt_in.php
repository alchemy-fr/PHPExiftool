<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RepeatingFlashCountBuilt_in extends AbstractTagGroup
{

  protected string $id = 'Nikon:RepeatingFlashCountBuilt-in';

  protected string $name = 'RepeatingFlashCountBuilt-in';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Repeating Flash Count Built-in',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::ShotInfoD800
       * line : 208909
       * type : ?
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD800.Nikon:RepeatingFlashCountBuilt-in',
      'desc' => [
        'en' => 'Repeating Flash Count Built-in',
      ],
    ],
  ];

}
