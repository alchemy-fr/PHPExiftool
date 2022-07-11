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
class OmenPercentToRationalLimitsBlue extends AbstractTagGroup
{

  protected string $id = 'KodakIFD:OmenPercentToRationalLimitsBlue';

  protected string $name = 'OmenPercentToRationalLimitsBlue';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Omen Percent To Rational Limits Blue',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::IFD
       * line : 156018
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::IFD.KodakIFD:OmenPercentToRationalLimitsBlue',
      'desc' => [
        'en' => 'Omen Percent To Rational Limits Blue',
      ],
    ],
  ];

}
