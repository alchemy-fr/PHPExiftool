<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MoreInfoBannerImage extends AbstractTagGroup
{

  protected string $id = 'RIFF:MoreInfoBannerImage';

  protected string $name = 'MoreInfoBannerImage';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'More Info Banner Image',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::Info
       * line : 328649
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::Info.RIFF:MoreInfoBannerImage',
      'desc' => [
        'en' => 'More Info Banner Image',
      ],
    ],
  ];

}
