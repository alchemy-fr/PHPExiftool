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
class NominalMaxAperture extends AbstractTagGroup
{

  protected string $id = 'Pentax:NominalMaxAperture';

  protected string $name = 'NominalMaxAperture';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Nominal Max Aperture',
    'fr' => 'Ouverture maxi nominal',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::LensData
       * line : 289107
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::LensData.Pentax:NominalMaxAperture',
      'desc' => [
        'en' => 'Nominal Max Aperture',
        'fr' => 'Ouverture maxi nominal',
      ],
    ],
  ];

}
