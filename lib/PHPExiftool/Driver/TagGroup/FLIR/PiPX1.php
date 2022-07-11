<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLIR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PiPX1 extends AbstractTagGroup
{

  protected string $id = 'FLIR:PiPX1';

  protected string $name = 'PiPX1';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'PiP X1',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::PiP
       * line : 124003
       * type : int16s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::PiP.FLIR:PiPX1',
      'desc' => [
        'en' => 'PiP X1',
      ],
    ],
  ];

}
