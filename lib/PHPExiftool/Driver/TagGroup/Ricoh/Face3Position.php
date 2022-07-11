<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Ricoh;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Face3Position extends AbstractTagGroup
{

  protected string $id = 'Ricoh:Face3Position';

  protected string $name = 'Face3Position';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Face 3 Position',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Ricoh::FaceInfo
       * line : 332210
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Ricoh::FaceInfo.Ricoh:Face3Position',
      'desc' => [
        'en' => 'Face 3 Position',
      ],
    ],
  ];

}
