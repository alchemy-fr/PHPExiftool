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
class CanonVRD extends AbstractTagGroup
{

  protected string $id = 'CanonVRD:CanonVRD';

  protected string $name = 'CanonVRD';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Canon VRD',
  ];

  protected int $count = 0;

  protected int $flags = 18;

  protected array $tags = [
    0 => [
      /**
       * table_name : Extra
       * line : 121325
       * type : ?
       * writable : true
       * count : 
       * flags : Binary,Unsafe
       */
      'id' => 'Extra.CanonVRD:CanonVRD',
      'desc' => [
        'en' => 'Canon VRD',
      ],
    ],
  ];

}
