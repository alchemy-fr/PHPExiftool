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
class MonochromeFilterEffect extends AbstractTagGroup
{

  protected string $id = 'CanonVRD:MonochromeFilterEffect';

  protected string $name = 'MonochromeFilterEffect';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Monochrome Filter Effect',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonVRD::DR4
       * line : 80537
       * type : ?
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::DR4.CanonVRD:MonochromeFilterEffect',
      'desc' => [
        'en' => 'Monochrome Filter Effect',
      ],
    ],
    1 => [
      /**
       * table_name : CanonVRD::Ver2
       * line : 82936
       * type : int16s
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::Ver2.CanonVRD:MonochromeFilterEffect',
      'desc' => [
        'en' => 'Monochrome Filter Effect',
      ],
    ],
  ];

}
