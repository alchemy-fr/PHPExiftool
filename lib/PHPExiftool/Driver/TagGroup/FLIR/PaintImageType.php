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
class PaintImageType extends AbstractTagGroup
{

  protected string $id = 'FLIR:PaintImageType';

  protected string $name = 'PaintImageType';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Paint Image Type',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::PaintData
       * line : 123830
       * type : undef
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::PaintData.FLIR:PaintImageType',
      'desc' => [
        'en' => 'Paint Image Type',
      ],
    ],
  ];

}
