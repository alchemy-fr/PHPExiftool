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
class FullSizeImageName extends AbstractTagGroup
{

  protected string $id = 'MIE-Image:FullSizeImageName';

  protected string $name = 'FullSizeImageName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Full Size Image Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MIE::Image
       * line : 164151
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'MIE::Image.MIE-Image:FullSizeImageName',
      'desc' => [
        'en' => 'Full Size Image Name',
      ],
    ],
  ];

}
