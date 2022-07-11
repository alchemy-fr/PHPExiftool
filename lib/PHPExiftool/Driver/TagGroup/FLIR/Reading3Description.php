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
class Reading3Description extends AbstractTagGroup
{

  protected string $id = 'FLIR:Reading3Description';

  protected string $name = 'Reading3Description';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Reading 3 Description',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::MeterLink
       * line : 123723
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::MeterLink.FLIR:Reading3Description',
      'desc' => [
        'en' => 'Reading 3 Description',
      ],
    ],
  ];

}
