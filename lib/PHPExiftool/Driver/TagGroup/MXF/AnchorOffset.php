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
class AnchorOffset extends AbstractTagGroup
{

  protected string $id = 'MXF:AnchorOffset';

  protected string $name = 'AnchorOffset';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Anchor Offset',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 171169
       * type : int8s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:AnchorOffset',
      'desc' => [
        'en' => 'Anchor Offset',
      ],
    ],
  ];

}
