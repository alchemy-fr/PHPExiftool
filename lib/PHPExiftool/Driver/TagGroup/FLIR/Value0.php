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
class Value0 extends AbstractTagGroup
{

  protected string $id = 'FLIR:Value0';

  protected string $name = 'Value0';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Value 0',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::TextInfo
       * line : 124080
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::TextInfo.FLIR:Value0',
      'desc' => [
        'en' => 'Value 0',
      ],
    ],
  ];

}
