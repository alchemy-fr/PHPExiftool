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
class CaptureWidthResetBlackSegNormal extends AbstractTagGroup
{

  protected string $id = 'KodakIFD:CaptureWidthResetBlackSegNormal';

  protected string $name = 'CaptureWidthResetBlackSegNormal';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Capture Width Reset Black Seg Normal',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::IFD
       * line : 157582
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::IFD.KodakIFD:CaptureWidthResetBlackSegNormal',
      'desc' => [
        'en' => 'Capture Width Reset Black Seg Normal',
      ],
    ],
  ];

}
