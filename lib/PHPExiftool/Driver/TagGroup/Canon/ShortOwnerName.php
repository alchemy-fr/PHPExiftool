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
class ShortOwnerName extends AbstractTagGroup
{

  protected string $id = 'Canon:ShortOwnerName';

  protected string $name = 'ShortOwnerName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Short Owner Name',
  ];

  protected int $count = 16;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::CameraInfo5D
       * line : 34411
       * type : string
       * writable : true
       * count : 16
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo5D.Canon:ShortOwnerName',
      'desc' => [
        'en' => 'Short Owner Name',
      ],
    ],
  ];

}
