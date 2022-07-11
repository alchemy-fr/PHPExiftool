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
class ResamplingKernelDenominators067 extends AbstractTagGroup
{

  protected string $id = 'KodakIFD:ResamplingKernelDenominators067';

  protected string $name = 'ResamplingKernelDenominators067';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Resampling Kernel Denominators 067',
  ];

  protected int $count = 3;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::IFD
       * line : 156909
       * type : int16u
       * writable : true
       * count : 3
       * flags : Permanent
       */
      'id' => 'Kodak::IFD.KodakIFD:ResamplingKernelDenominators067',
      'desc' => [
        'en' => 'Resampling Kernel Denominators 067',
      ],
    ],
  ];

}
