<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MultiExposureMode extends AbstractTagGroup
{

  protected string $id = 'Nikon:MultiExposureMode';

  protected string $name = 'MultiExposureMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Multi Exposure Mode',
    'fr' => 'Mode de surimpression',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::MultiExposure
       * line : 202325
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::MultiExposure.Nikon:MultiExposureMode',
      'desc' => [
        'en' => 'Multi Exposure Mode',
        'fr' => 'Mode de surimpression',
      ],
    ],
  ];

}
