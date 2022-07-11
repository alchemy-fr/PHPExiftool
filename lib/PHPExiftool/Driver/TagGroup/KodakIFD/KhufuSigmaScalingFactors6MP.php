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
class KhufuSigmaScalingFactors6MP extends AbstractTagGroup
{

  protected string $id = 'KodakIFD:KhufuSigmaScalingFactors6MP';

  protected string $name = 'KhufuSigmaScalingFactors6MP';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Khufu Sigma Scaling Factors 6 MP',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::IFD
       * line : 157207
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::IFD.KodakIFD:KhufuSigmaScalingFactors6MP',
      'desc' => [
        'en' => 'Khufu Sigma Scaling Factors 6 MP',
      ],
    ],
  ];

}
