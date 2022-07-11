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
class PerforationsPerFrame extends AbstractTagGroup
{

  protected string $id = 'MXF:PerforationsPerFrame';

  protected string $name = 'PerforationsPerFrame';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Perforations Per Frame',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 169516
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:PerforationsPerFrame',
      'desc' => [
        'en' => 'Perforations Per Frame',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 169519
       * type : rational64s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:PerforationsPerFrame',
      'desc' => [
        'en' => 'Perforations Per Frame',
      ],
    ],
  ];

}
