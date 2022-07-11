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
class InternalSerialNumber extends AbstractTagGroup
{

  protected string $id = 'Nintendo:InternalSerialNumber';

  protected string $name = 'InternalSerialNumber';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Internal Serial Number',
    'fr' => 'Numéro de série interne',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nintendo::CameraInfo
       * line : 249335
       * type : undef
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nintendo::CameraInfo.Nintendo:InternalSerialNumber',
      'desc' => [
        'en' => 'Internal Serial Number',
        'fr' => 'Numéro de série interne',
      ],
    ],
  ];

}
