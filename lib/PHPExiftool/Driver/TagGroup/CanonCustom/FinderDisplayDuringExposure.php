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
class FinderDisplayDuringExposure extends AbstractTagGroup
{

  protected string $id = 'CanonCustom:FinderDisplayDuringExposure';

  protected string $name = 'FinderDisplayDuringExposure';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Finder Display During Exposure',
    'fr' => 'Affich. viseur pendant expo.',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonCustom::Functions1D
       * line : 71873
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions1D.CanonCustom:FinderDisplayDuringExposure',
      'desc' => [
        'en' => 'Finder Display During Exposure',
        'fr' => 'Affich. viseur pendant expo.',
      ],
    ],
  ];

}
