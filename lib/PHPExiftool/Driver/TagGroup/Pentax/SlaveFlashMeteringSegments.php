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
class SlaveFlashMeteringSegments extends AbstractTagGroup
{

  protected string $id = 'Pentax:SlaveFlashMeteringSegments';

  protected string $name = 'SlaveFlashMeteringSegments';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Slave Flash Metering Segments',
    'fr' => 'Segments de mesure flash esclave',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::Main
       * line : 301078
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::Main.Pentax:SlaveFlashMeteringSegments',
      'desc' => [
        'en' => 'Slave Flash Metering Segments',
        'fr' => 'Segments de mesure flash esclave',
      ],
    ],
  ];

}
