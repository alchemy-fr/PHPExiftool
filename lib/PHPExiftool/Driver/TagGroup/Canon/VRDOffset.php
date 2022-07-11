<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VRDOffset extends AbstractTagGroup
{

  protected string $id = 'Canon:VRDOffset';

  protected string $name = 'VRDOffset';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'VRD Offset',
  ];

  protected int $count = 0;

  protected int $flags = 12;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::Main
       * line : 65979
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent,Protected
       */
      'id' => 'Canon::Main.Canon:VRDOffset',
      'desc' => [
        'en' => 'VRD Offset',
      ],
    ],
  ];

}
