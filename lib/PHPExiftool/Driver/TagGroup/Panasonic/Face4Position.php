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
class Face4Position extends AbstractTagGroup
{

  protected string $id = 'Panasonic:Face4Position';

  protected string $name = 'Face4Position';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Face 4 Position',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::FaceDetInfo
       * line : 274521
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Panasonic::FaceDetInfo.Panasonic:Face4Position',
      'desc' => [
        'en' => 'Face 4 Position',
      ],
    ],
  ];

}
