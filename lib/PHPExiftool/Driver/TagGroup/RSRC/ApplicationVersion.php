<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RSRC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ApplicationVersion extends AbstractTagGroup
{

  protected string $id = 'RSRC:ApplicationVersion';

  protected string $name = 'ApplicationVersion';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Application Version',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : RSRC::Main
       * line : 329467
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RSRC::Main.RSRC:ApplicationVersion',
      'desc' => [
        'en' => 'Application Version',
      ],
    ],
  ];

}
