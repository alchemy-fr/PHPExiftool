<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLIR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Label2 extends AbstractTagGroup
{

  protected string $id = 'FLIR:Label2';

  protected string $name = 'Label2';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Label 2',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::TextInfo
       * line : 124074
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::TextInfo.FLIR:Label2',
      'desc' => [
        'en' => 'Label 2',
      ],
    ],
  ];

}
