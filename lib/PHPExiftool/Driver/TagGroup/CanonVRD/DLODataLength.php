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
class DLODataLength extends AbstractTagGroup
{

  protected string $id = 'CanonVRD:DLODataLength';

  protected string $name = 'DLODataLength';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'DLO Data Length',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonVRD::Ver2
       * line : 83801
       * type : int32u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::Ver2.CanonVRD:DLODataLength',
      'desc' => [
        'en' => 'DLO Data Length',
      ],
    ],
  ];

}
