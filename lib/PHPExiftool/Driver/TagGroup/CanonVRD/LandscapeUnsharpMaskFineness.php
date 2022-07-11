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
class LandscapeUnsharpMaskFineness extends AbstractTagGroup
{

  protected string $id = 'CanonVRD:LandscapeUnsharpMaskFineness';

  protected string $name = 'LandscapeUnsharpMaskFineness';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Landscape Unsharp Mask Fineness',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonVRD::Ver2
       * line : 83709
       * type : int16s
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::Ver2.CanonVRD:LandscapeUnsharpMaskFineness',
      'desc' => [
        'en' => 'Landscape Unsharp Mask Fineness',
      ],
    ],
  ];

}
