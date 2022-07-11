<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GIMP;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class XCFVersion extends AbstractTagGroup
{

  protected string $id = 'GIMP:XCFVersion';

  protected string $name = 'XCFVersion';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'XCF Version',
  ];

  protected int $count = 5;

  protected array $tags = [
    0 => [
      /**
       * table_name : GIMP::Header
       * line : 131794
       * type : string
       * writable : false
       * count : 5
       * flags : 
       */
      'id' => 'GIMP::Header.GIMP:XCFVersion',
      'desc' => [
        'en' => 'XCF Version',
      ],
    ],
  ];

}
