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
class Reading4Description extends AbstractTagGroup
{

  protected string $id = 'FLIR:Reading4Description';

  protected string $name = 'Reading4Description';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Reading 4 Description',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::MeterLink
       * line : 123769
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::MeterLink.FLIR:Reading4Description',
      'desc' => [
        'en' => 'Reading 4 Description',
      ],
    ],
  ];

}
