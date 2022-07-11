<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class YCbCrCoefficients extends AbstractTagGroup
{

  protected string $id = 'Olympus:YCbCrCoefficients';

  protected string $name = 'YCbCrCoefficients';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Y Cb Cr Coefficients',
    'fr' => 'Coefficients de la matrice de transformation de l\'espace de couleurs',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::RawInfo
       * line : 261288
       * type : rational32u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Olympus::RawInfo.Olympus:YCbCrCoefficients',
      'desc' => [
        'en' => 'Y Cb Cr Coefficients',
        'fr' => 'Coefficients de la matrice de transformation de l\'espace de couleurs',
      ],
    ],
  ];

}
