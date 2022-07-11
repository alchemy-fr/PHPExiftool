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
class Real2IR extends AbstractTagGroup
{

  protected string $id = 'FLIR:Real2IR';

  protected string $name = 'Real2IR';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Real 2 IR',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::PiP
       * line : 123994
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::PiP.FLIR:Real2IR',
      'desc' => [
        'en' => 'Real 2 IR',
      ],
    ],
  ];

}
