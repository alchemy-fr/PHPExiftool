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
class GammaCompensatedValue extends AbstractTagGroup
{

  protected string $id = 'IPTC:GammaCompensatedValue';

  protected string $name = 'GammaCompensatedValue';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Gamma Compensated Value',
    'fr' => 'Valeur de compensation gamma',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::NewsPhoto
       * line : 152259
       * type : int16u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'IPTC::NewsPhoto.IPTC:GammaCompensatedValue',
      'desc' => [
        'en' => 'Gamma Compensated Value',
        'fr' => 'Valeur de compensation gamma',
      ],
    ],
  ];

}
