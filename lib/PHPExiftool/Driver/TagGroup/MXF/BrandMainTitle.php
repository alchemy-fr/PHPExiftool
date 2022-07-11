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
class BrandMainTitle extends AbstractTagGroup
{

  protected string $id = 'MXF:BrandMainTitle';

  protected string $name = 'BrandMainTitle';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Brand Main Title',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 171355
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:BrandMainTitle',
      'desc' => [
        'en' => 'Brand Main Title',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 171358
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:BrandMainTitle',
      'desc' => [
        'en' => 'Brand Main Title',
      ],
    ],
  ];

}
