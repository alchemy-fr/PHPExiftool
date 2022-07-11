<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Panasonic;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RecognizedFace1Position extends AbstractTagGroup
{

  protected string $id = 'Panasonic:RecognizedFace1Position';

  protected string $name = 'RecognizedFace1Position';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Recognized Face 1 Position',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::FaceRecInfo
       * line : 274547
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Panasonic::FaceRecInfo.Panasonic:RecognizedFace1Position',
      'desc' => [
        'en' => 'Recognized Face 1 Position',
      ],
    ],
  ];

}
