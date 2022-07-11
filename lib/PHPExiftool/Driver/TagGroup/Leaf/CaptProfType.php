<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Leaf;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CaptProfType extends AbstractTagGroup
{

  protected string $id = 'Leaf:CaptProfType';

  protected string $name = 'CaptProfType';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Capt Prof Type',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Leaf::CaptureProfile
       * line : 162088
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Leaf::CaptureProfile.Leaf:CaptProfType',
      'desc' => [
        'en' => 'Capt Prof Type',
      ],
    ],
  ];

}
