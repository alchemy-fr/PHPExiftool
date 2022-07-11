<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Jpeg2000;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CaptureYResolution extends AbstractTagGroup
{

  protected string $id = 'Jpeg2000:CaptureYResolution';

  protected string $name = 'CaptureYResolution';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Capture Y Resolution',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Jpeg2000::CaptureResolution
       * line : 153903
       * type : rational32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Jpeg2000::CaptureResolution.Jpeg2000:CaptureYResolution',
      'desc' => [
        'en' => 'Capture Y Resolution',
      ],
    ],
  ];

}
