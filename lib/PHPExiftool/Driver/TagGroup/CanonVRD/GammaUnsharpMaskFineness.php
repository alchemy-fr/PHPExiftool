<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonVRD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GammaUnsharpMaskFineness extends AbstractTagGroup
{

  protected string $id = 'CanonVRD:GammaUnsharpMaskFineness';

  protected string $name = 'GammaUnsharpMaskFineness';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Gamma Unsharp Mask Fineness',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonVRD::GammaInfo
       * line : 82012
       * type : double
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::GammaInfo.CanonVRD:GammaUnsharpMaskFineness',
      'desc' => [
        'en' => 'Gamma Unsharp Mask Fineness',
      ],
    ],
  ];

}
