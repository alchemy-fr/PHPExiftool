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
class Face23Position extends AbstractTagGroup
{

  protected string $id = 'Pentax:Face23Position';

  protected string $name = 'Face23Position';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Face 23 Position',
  ];

  protected int $count = 2;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::FacePos
       * line : 286089
       * type : int16u
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Pentax::FacePos.Pentax:Face23Position',
      'desc' => [
        'en' => 'Face 23 Position',
      ],
    ],
  ];

}
