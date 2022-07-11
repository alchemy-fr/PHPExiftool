<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Stim;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CropYViewpointNumber extends AbstractTagGroup
{

  protected string $id = 'Stim:CropYViewpointNumber';

  protected string $name = 'CropYViewpointNumber';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Crop Y Viewpoint Number',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Stim::CropY
       * line : 394896
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Stim::CropY.Stim:CropYViewpointNumber',
      'desc' => [
        'en' => 'Crop Y Viewpoint Number',
      ],
    ],
  ];

}
