<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IPTC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class QuantizationMethod extends AbstractTagGroup
{

  protected string $id = 'IPTC:QuantizationMethod';

  protected string $name = 'QuantizationMethod';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Quantization Method',
    'fr' => 'Méthode de quantification',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::NewsPhoto
       * line : 152141
       * type : int8u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'IPTC::NewsPhoto.IPTC:QuantizationMethod',
      'desc' => [
        'en' => 'Quantization Method',
        'fr' => 'Méthode de quantification',
      ],
    ],
  ];

}
