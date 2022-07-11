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
class ProductionCode extends AbstractTagGroup
{

  protected string $id = 'Pentax:ProductionCode';

  protected string $name = 'ProductionCode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Production Code',
    'fr' => 'L\'appareil est passé en SAV',
  ];

  protected int $count = 2;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::CameraInfo
       * line : 284680
       * type : int32u
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Pentax::CameraInfo.Pentax:ProductionCode',
      'desc' => [
        'en' => 'Production Code',
        'fr' => 'L\'appareil est passé en SAV',
      ],
    ],
  ];

}
