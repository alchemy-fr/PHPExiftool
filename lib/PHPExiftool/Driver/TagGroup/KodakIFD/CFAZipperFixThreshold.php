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
class CFAZipperFixThreshold extends AbstractTagGroup
{

  protected string $id = 'KodakIFD:CFAZipperFixThreshold';

  protected string $name = 'CFAZipperFixThreshold';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'CFA Zipper Fix Threshold',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::IFD
       * line : 156970
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::IFD.KodakIFD:CFAZipperFixThreshold',
      'desc' => [
        'en' => 'CFA Zipper Fix Threshold',
      ],
    ],
  ];

}
