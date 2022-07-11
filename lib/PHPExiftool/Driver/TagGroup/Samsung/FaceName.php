<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Samsung;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FaceName extends AbstractTagGroup
{

  protected string $id = 'Samsung:FaceName';

  protected string $name = 'FaceName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Face Name',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Samsung::Type2
       * line : 335653
       * type : string
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Samsung::Type2.Samsung:FaceName',
      'desc' => [
        'en' => 'Face Name',
      ],
    ],
  ];

}
