<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FotoStation;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorPlanes extends AbstractTagGroup
{

  protected string $id = 'FotoStation:ColorPlanes';

  protected string $name = 'ColorPlanes';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Planes',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FotoStation::SoftEdit
       * line : 128581
       * type : int32s
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'FotoStation::SoftEdit.FotoStation:ColorPlanes',
      'desc' => [
        'en' => 'Color Planes',
      ],
    ],
  ];

}
