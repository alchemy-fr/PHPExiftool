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
class RecognizedFace3Name extends AbstractTagGroup
{

  protected string $id = 'Panasonic:RecognizedFace3Name';

  protected string $name = 'RecognizedFace3Name';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Recognized Face 3 Name',
  ];

  protected int $count = 20;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::FaceRecInfo
       * line : 274572
       * type : string
       * writable : true
       * count : 20
       * flags : Permanent
       */
      'id' => 'Panasonic::FaceRecInfo.Panasonic:RecognizedFace3Name',
      'desc' => [
        'en' => 'Recognized Face 3 Name',
      ],
    ],
  ];

}
