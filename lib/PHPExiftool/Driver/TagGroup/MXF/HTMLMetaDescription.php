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
class HTMLMetaDescription extends AbstractTagGroup
{

  protected string $id = 'MXF:HTMLMetaDescription';

  protected string $name = 'HTMLMetaDescription';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'HTML Meta Description',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 172400
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:HTMLMetaDescription',
      'desc' => [
        'en' => 'HTML Meta Description',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 172403
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:HTMLMetaDescription',
      'desc' => [
        'en' => 'HTML Meta Description',
      ],
    ],
  ];

}
