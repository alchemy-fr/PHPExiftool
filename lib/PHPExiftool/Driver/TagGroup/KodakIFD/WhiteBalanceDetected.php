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
class WhiteBalanceDetected extends AbstractTagGroup
{

  protected string $id = 'KodakIFD:WhiteBalanceDetected';

  protected string $name = 'WhiteBalanceDetected';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'White Balance Detected',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::IFD
       * line : 155149
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Kodak::IFD.KodakIFD:WhiteBalanceDetected',
      'desc' => [
        'en' => 'White Balance Detected',
      ],
    ],
  ];

}
