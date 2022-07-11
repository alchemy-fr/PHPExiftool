<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VignettingCorrVersion extends AbstractTagGroup
{

  protected string $id = 'Canon:VignettingCorrVersion';

  protected string $name = 'VignettingCorrVersion';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Vignetting Corr Version',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::VignettingCorr
       * line : 71103
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::VignettingCorr.Canon:VignettingCorrVersion',
      'desc' => [
        'en' => 'Vignetting Corr Version',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::VignettingCorrUnknown
       * line : 71243
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::VignettingCorrUnknown.Canon:VignettingCorrVersion',
      'desc' => [
        'en' => 'Vignetting Corr Version',
      ],
    ],
  ];

}
