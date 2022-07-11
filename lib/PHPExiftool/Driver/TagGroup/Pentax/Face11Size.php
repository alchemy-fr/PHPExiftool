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
class Face11Size extends AbstractTagGroup
{

  protected string $id = 'Pentax:Face11Size';

  protected string $name = 'Face11Size';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Face 11 Size',
  ];

  protected int $count = 2;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::FaceSize
       * line : 286173
       * type : int16u
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Pentax::FaceSize.Pentax:Face11Size',
      'desc' => [
        'en' => 'Face 11 Size',
      ],
    ],
  ];

}
