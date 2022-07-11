<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PSP;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageResolution extends AbstractTagGroup
{

  protected string $id = 'PSP:ImageResolution';

  protected string $name = 'ImageResolution';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Image Resolution',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PSP::Image
       * line : 273574
       * type : double
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PSP::Image.PSP:ImageResolution',
      'desc' => [
        'en' => 'Image Resolution',
      ],
    ],
  ];

}
