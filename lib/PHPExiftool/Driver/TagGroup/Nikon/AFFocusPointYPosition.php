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
class AFFocusPointYPosition extends AbstractTagGroup
{

  protected string $id = 'Nikon:AFFocusPointYPosition';

  protected string $name = 'AFFocusPointYPosition';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'AF Focus Point Y Position',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 190377
       * type : int8u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:AFFocusPointYPosition',
      'desc' => [
        'en' => 'AF Focus Point Y Position',
      ],
    ],
  ];

}
