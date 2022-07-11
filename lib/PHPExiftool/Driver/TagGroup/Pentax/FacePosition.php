<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FacePosition extends AbstractTagGroup
{

  protected string $id = 'Pentax:FacePosition';

  protected string $name = 'FacePosition';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Face Position',
  ];

  protected int $count = 2;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::FaceInfo
       * line : 285975
       * type : int8u
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Pentax::FaceInfo.Pentax:FacePosition',
      'desc' => [
        'en' => 'Face Position',
      ],
    ],
  ];

}
