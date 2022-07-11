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
class RecognizedFace2Age extends AbstractTagGroup
{

  protected string $id = 'Panasonic:RecognizedFace2Age';

  protected string $name = 'RecognizedFace2Age';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Recognized Face 2 Age',
  ];

  protected int $count = 20;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::FaceRecInfo
       * line : 274567
       * type : string
       * writable : true
       * count : 20
       * flags : Permanent
       */
      'id' => 'Panasonic::FaceRecInfo.Panasonic:RecognizedFace2Age',
      'desc' => [
        'en' => 'Recognized Face 2 Age',
      ],
    ],
  ];

}
