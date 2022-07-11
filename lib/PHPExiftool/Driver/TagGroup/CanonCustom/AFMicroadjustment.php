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
class AFMicroadjustment extends AbstractTagGroup
{

  protected string $id = 'CanonCustom:AFMicroadjustment';

  protected string $name = 'AFMicroadjustment';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF Microadjustment',
    'fr' => 'Micro-ajustement de l\'AF',
  ];

  protected int $count = 5;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 73734
       * type : int32s
       * writable : true
       * count : 5
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:AFMicroadjustment',
      'desc' => [
        'en' => 'AF Microadjustment',
        'fr' => 'Micro-ajustement de l\'AF',
      ],
    ],
  ];

}
