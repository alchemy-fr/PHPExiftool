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
class Face5Position extends AbstractTagGroup
{

  protected string $id = 'Canon:Face5Position';

  protected string $name = 'Face5Position';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Face 5 Position',
  ];

  protected int $count = 2;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::FaceDetect1
       * line : 63311
       * type : int16s
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Canon::FaceDetect1.Canon:Face5Position',
      'desc' => [
        'en' => 'Face 5 Position',
      ],
    ],
  ];

}
