<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OriginalRawCreator extends AbstractTagGroup
{

  protected string $id = 'DNG:OriginalRawCreator';

  protected string $name = 'OriginalRawCreator';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Original Raw Creator',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DNG::OriginalRaw
       * line : 105611
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DNG::OriginalRaw.DNG:OriginalRawCreator',
      'desc' => [
        'en' => 'Original Raw Creator',
      ],
    ],
  ];

}
