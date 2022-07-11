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
class InternalSerialNumber extends AbstractTagGroup
{

  protected string $id = 'Pentax:InternalSerialNumber';

  protected string $name = 'InternalSerialNumber';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Internal Serial Number',
    'fr' => 'Numéro de série interne',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::CameraInfo
       * line : 284686
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::CameraInfo.Pentax:InternalSerialNumber',
      'desc' => [
        'en' => 'Internal Serial Number',
        'fr' => 'Numéro de série interne',
      ],
    ],
  ];

}
