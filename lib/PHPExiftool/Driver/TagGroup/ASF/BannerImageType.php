<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ASF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BannerImageType extends AbstractTagGroup
{

  protected string $id = 'ASF:BannerImageType';

  protected string $name = 'BannerImageType';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Banner Image Type',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : ASF::ContentBranding
       * line : 896
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ASF::ContentBranding.ASF:BannerImageType',
      'desc' => [
        'en' => 'Banner Image Type',
      ],
    ],
    1 => [
      /**
       * table_name : ASF::ExtendedDescr
       * line : 1083
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ASF::ExtendedDescr.ASF:BannerImageType',
      'desc' => [
        'en' => 'Banner Image Type',
      ],
    ],
  ];

}
