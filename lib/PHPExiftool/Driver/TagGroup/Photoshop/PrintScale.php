<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Photoshop;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PrintScale extends AbstractTagGroup
{

  protected string $id = 'Photoshop:PrintScale';

  protected string $name = 'PrintScale';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Print Scale',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Photoshop::PrintScaleInfo
       * line : 306089
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Photoshop::PrintScaleInfo.Photoshop:PrintScale',
      'desc' => [
        'en' => 'Print Scale',
      ],
    ],
  ];

}
