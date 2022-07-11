<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MIE_Image;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FullSizeImage extends AbstractTagGroup
{

  protected string $id = 'MIE-Image:FullSizeImage';

  protected string $name = 'FullSizeImage';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Full Size Image',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : MIE::Image
       * line : 164231
       * type : undef
       * writable : true
       * count : 
       * flags : Binary
       */
      'id' => 'MIE::Image.MIE-Image:FullSizeImage',
      'desc' => [
        'en' => 'Full Size Image',
      ],
    ],
  ];

}
