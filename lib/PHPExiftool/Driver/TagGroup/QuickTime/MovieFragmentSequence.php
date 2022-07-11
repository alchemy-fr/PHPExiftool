<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MovieFragmentSequence extends AbstractTagGroup
{

  protected string $id = 'QuickTime:MovieFragmentSequence';

  protected string $name = 'MovieFragmentSequence';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Movie Fragment Sequence',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::MovieFragHdr
       * line : 324415
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::MovieFragHdr.QuickTime:MovieFragmentSequence',
      'desc' => [
        'en' => 'Movie Fragment Sequence',
      ],
    ],
  ];

}
