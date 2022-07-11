<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MaxFaces extends AbstractTagGroup
{

  protected string $id = 'Olympus:MaxFaces';

  protected string $name = 'MaxFaces';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Max Faces',
  ];

  protected int $count = 3;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::ImageProcessing
       * line : 255900
       * type : int32u
       * writable : true
       * count : 3
       * flags : Permanent
       */
      'id' => 'Olympus::ImageProcessing.Olympus:MaxFaces',
      'desc' => [
        'en' => 'Max Faces',
      ],
    ],
  ];

}
