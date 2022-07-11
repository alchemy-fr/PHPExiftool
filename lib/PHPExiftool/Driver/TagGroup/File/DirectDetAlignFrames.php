<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DirectDetAlignFrames extends AbstractTagGroup
{

  protected string $id = 'File:DirectDetAlignFrames';

  protected string $name = 'DirectDetAlignFrames';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Direct Det Align Frames',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MRC::FEI12
       * line : 166982
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MRC::FEI12.File:DirectDetAlignFrames',
      'desc' => [
        'en' => 'Direct Det Align Frames',
      ],
    ],
  ];

}
