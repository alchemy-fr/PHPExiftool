<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LCDDisplayReturnToShoot extends AbstractTagGroup
{

  protected string $id = 'CanonCustom:LCDDisplayReturnToShoot';

  protected string $name = 'LCDDisplayReturnToShoot';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'LCD Display Return To Shoot',
    'fr' => 'Affich. LCD -> Prise de vues',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonCustom::Functions5D
       * line : 77777
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions5D.CanonCustom:LCDDisplayReturnToShoot',
      'desc' => [
        'en' => 'LCD Display Return To Shoot',
        'fr' => 'Affich. LCD -> Prise de vues',
      ],
    ],
  ];

}
