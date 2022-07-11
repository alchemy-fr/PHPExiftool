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
class MaxSampleValue extends AbstractTagGroup
{

  protected string $id = 'IFD0:MaxSampleValue';

  protected string $name = 'MaxSampleValue';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Max Sample Value',
    'fr' => 'Valeur maxi d\'échantillon',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 111285
       * type : int16u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.IFD0:MaxSampleValue',
      'desc' => [
        'en' => 'Max Sample Value',
        'fr' => 'Valeur maxi d\'échantillon',
      ],
    ],
  ];

}
