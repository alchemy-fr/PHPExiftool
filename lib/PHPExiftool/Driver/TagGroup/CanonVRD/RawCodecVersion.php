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
class RawCodecVersion extends AbstractTagGroup
{

  protected string $id = 'CanonVRD:RawCodecVersion';

  protected string $name = 'RawCodecVersion';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Raw Codec Version',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonVRD::IHL
       * line : 82077
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::IHL.CanonVRD:RawCodecVersion',
      'desc' => [
        'en' => 'Raw Codec Version',
      ],
    ],
  ];

}
