<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorMatrix extends AbstractTagGroup
{

  protected string $id = 'Canon:ColorMatrix';

  protected string $name = 'ColorMatrix';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Matrix',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::LogInfo
       * line : 64522
       * type : int32s
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Canon::LogInfo.Canon:ColorMatrix',
      'desc' => [
        'en' => 'Color Matrix',
      ],
    ],
  ];

}
