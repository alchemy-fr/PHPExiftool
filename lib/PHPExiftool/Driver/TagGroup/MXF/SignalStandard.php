<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SignalStandard extends AbstractTagGroup
{

  protected string $id = 'MXF:SignalStandard';

  protected string $name = 'SignalStandard';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Signal Standard',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 168964
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:SignalStandard',
      'desc' => [
        'en' => 'Signal Standard',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 171763
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:SignalStandard',
      'desc' => [
        'en' => 'Signal Standard',
      ],
    ],
  ];

}
