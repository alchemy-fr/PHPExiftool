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
class PentaxModelID extends AbstractTagGroup
{

  protected string $id = 'Pentax:PentaxModelID';

  protected string $name = 'PentaxModelID';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Pentax Model ID',
    'fr' => 'Modèle Pentax',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::CameraInfo
       * line : 284242
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::CameraInfo.Pentax:PentaxModelID',
      'desc' => [
        'en' => 'Pentax Model ID',
        'fr' => 'Modèle Pentax',
      ],
    ],
    1 => [
      /**
       * table_name : Pentax::Main
       * line : 295134
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::Main.Pentax:PentaxModelID',
      'desc' => [
        'en' => 'Pentax Model ID',
        'fr' => 'Modèle Pentax',
      ],
    ],
  ];

}
