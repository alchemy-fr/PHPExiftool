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
class SequenceNumberRandomOffset extends AbstractTagGroup
{

  protected string $id = 'QuickTime:SequenceNumberRandomOffset';

  protected string $name = 'SequenceNumberRandomOffset';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Sequence Number Random Offset',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::HintSampleDesc
       * line : 314094
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::HintSampleDesc.QuickTime:SequenceNumberRandomOffset',
      'desc' => [
        'en' => 'Sequence Number Random Offset',
      ],
    ],
  ];

}
