<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmpDM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MarkersCuePointParamsKey extends AbstractTagGroup
{

  protected string $id = 'XMP-xmpDM:MarkersCuePointParamsKey';

  protected string $name = 'MarkersCuePointParamsKey';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Markers Cue Point Params Key',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmpDM
       * line : 413510
       * type : string
       * writable : true
       * count : 
       * flags : Flattened,List
       */
      'id' => 'XMP::xmpDM.XMP-xmpDM:MarkersCuePointParamsKey',
      'desc' => [
        'en' => 'Markers Cue Point Params Key',
      ],
    ],
  ];

}
