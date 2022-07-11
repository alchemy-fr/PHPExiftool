<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AEMicroadjustment extends AbstractTagGroup
{

  protected string $id = 'CanonCustom:AEMicroadjustment';

  protected string $name = 'AEMicroadjustment';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AE Microadjustment',
  ];

  protected int $count = 3;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 73012
       * type : int32s
       * writable : true
       * count : 3
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:AEMicroadjustment',
      'desc' => [
        'en' => 'AE Microadjustment',
      ],
    ],
  ];

}
