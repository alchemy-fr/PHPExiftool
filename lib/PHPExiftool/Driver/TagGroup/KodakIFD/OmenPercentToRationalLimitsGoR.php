<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OmenPercentToRationalLimitsGoR extends AbstractTagGroup
{

  protected string $id = 'KodakIFD:OmenPercentToRationalLimitsGoR';

  protected string $name = 'OmenPercentToRationalLimitsGoR';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Omen Percent To Rational Limits Go R',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::IFD
       * line : 156015
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::IFD.KodakIFD:OmenPercentToRationalLimitsGoR',
      'desc' => [
        'en' => 'Omen Percent To Rational Limits Go R',
      ],
    ],
  ];

}
