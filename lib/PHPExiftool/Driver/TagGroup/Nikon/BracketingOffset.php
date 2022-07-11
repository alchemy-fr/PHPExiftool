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
class BracketingOffset extends AbstractTagGroup
{

  protected string $id = 'Nikon:BracketingOffset';

  protected string $name = 'BracketingOffset';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Bracketing Offset',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::ShotInfoD810
       * line : 208955
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD810.Nikon:BracketingOffset',
      'desc' => [
        'en' => 'Bracketing Offset',
      ],
    ],
  ];

}
