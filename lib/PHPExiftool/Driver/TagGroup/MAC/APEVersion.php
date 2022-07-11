<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MAC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class APEVersion extends AbstractTagGroup
{

  protected string $id = 'MAC:APEVersion';

  protected string $name = 'APEVersion';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'APE Version',
    'fr' => 'Version APE',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : APE::OldHeader
       * line : 405
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'APE::OldHeader.MAC:APEVersion',
      'desc' => [
        'en' => 'APE Version',
        'fr' => 'Version APE',
      ],
    ],
  ];

}
