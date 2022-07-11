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
class CropXCommonOffset extends AbstractTagGroup
{

  protected string $id = 'Stim:CropXCommonOffset';

  protected string $name = 'CropXCommonOffset';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Crop X Common Offset',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Stim::CropX
       * line : 394847
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Stim::CropX.Stim:CropXCommonOffset',
      'desc' => [
        'en' => 'Crop X Common Offset',
      ],
    ],
  ];

}
