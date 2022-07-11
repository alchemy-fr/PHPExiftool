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
class NITFLayerTargetID extends AbstractTagGroup
{

  protected string $id = 'MXF:NITFLayerTargetID';

  protected string $name = 'NITFLayerTargetID';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'NITF Layer Target ID',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 172335
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:NITFLayerTargetID',
      'desc' => [
        'en' => 'NITF Layer Target ID',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 172338
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:NITFLayerTargetID',
      'desc' => [
        'en' => 'NITF Layer Target ID',
      ],
    ],
  ];

}
