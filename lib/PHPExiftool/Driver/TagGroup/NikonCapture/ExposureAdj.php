<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonCapture;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExposureAdj extends AbstractTagGroup
{

  protected string $id = 'NikonCapture:ExposureAdj';

  protected string $name = 'ExposureAdj';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Exposure Adj',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCapture::Exposure
       * line : 210642
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCapture::Exposure.NikonCapture:ExposureAdj',
      'desc' => [
        'en' => 'Exposure Adj',
      ],
    ],
  ];

}
