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
class WBAdjRedBalance extends AbstractTagGroup
{

  protected string $id = 'NikonCapture:WBAdjRedBalance';

  protected string $name = 'WBAdjRedBalance';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB Adj Red Balance',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCapture::WBAdjData
       * line : 211921
       * type : double
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCapture::WBAdjData.NikonCapture:WBAdjRedBalance',
      'desc' => [
        'en' => 'WB Adj Red Balance',
      ],
    ],
  ];

}
