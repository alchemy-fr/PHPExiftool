<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GPS;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSProcessingMethod extends AbstractTagGroup
{

  protected string $id = 'GPS:GPSProcessingMethod';

  protected string $name = 'GPSProcessingMethod';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'GPS Processing Method',
    'fr' => 'Nom de la méthode de traitement GPS',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : GPS::Main
       * line : 132956
       * type : undef
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'GPS::Main.GPS:GPSProcessingMethod',
      'desc' => [
        'en' => 'GPS Processing Method',
        'fr' => 'Nom de la méthode de traitement GPS',
      ],
    ],
  ];

}
