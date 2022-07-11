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
class CropXOffset2 extends AbstractTagGroup
{

  protected string $id = 'Stim:CropXOffset2';

  protected string $name = 'CropXOffset2';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Crop X Offset 2',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Stim::CropX
       * line : 394873
       * type : int32s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Stim::CropX.Stim:CropXOffset2',
      'desc' => [
        'en' => 'Crop X Offset 2',
      ],
    ],
  ];

}
