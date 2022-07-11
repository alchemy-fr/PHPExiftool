<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IFD0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MinSampleValue extends AbstractTagGroup
{

  protected string $id = 'IFD0:MinSampleValue';

  protected string $name = 'MinSampleValue';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Min Sample Value',
    'fr' => 'Valeur mini d\'échantillon',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 111271
       * type : int16u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.IFD0:MinSampleValue',
      'desc' => [
        'en' => 'Min Sample Value',
        'fr' => 'Valeur mini d\'échantillon',
      ],
    ],
  ];

}
