<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nintendo;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ModelID extends AbstractTagGroup
{

  protected string $id = 'Nintendo:ModelID';

  protected string $name = 'ModelID';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Model ID',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nintendo::CameraInfo
       * line : 249320
       * type : undef
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nintendo::CameraInfo.Nintendo:ModelID',
      'desc' => [
        'en' => 'Model ID',
      ],
    ],
  ];

}
