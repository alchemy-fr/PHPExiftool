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
class CustomPictureStyleData extends AbstractTagGroup
{

  protected string $id = 'CanonVRD:CustomPictureStyleData';

  protected string $name = 'CustomPictureStyleData';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Custom Picture Style Data',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonVRD::DR4
       * line : 80828
       * type : ?
       * writable : true
       * count : 
       * flags : Binary
       */
      'id' => 'CanonVRD::DR4.CanonVRD:CustomPictureStyleData',
      'desc' => [
        'en' => 'Custom Picture Style Data',
      ],
    ],
    1 => [
      /**
       * table_name : CanonVRD::Ver2
       * line : 83142
       * type : var_int16u
       * writable : true
       * count : 
       * flags : Binary
       */
      'id' => 'CanonVRD::Ver2.CanonVRD:CustomPictureStyleData',
      'desc' => [
        'en' => 'Custom Picture Style Data',
      ],
    ],
  ];

}
