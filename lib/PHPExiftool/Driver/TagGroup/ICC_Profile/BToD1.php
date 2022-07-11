<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ICC_Profile;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BToD1 extends AbstractTagGroup
{

  protected string $id = 'ICC_Profile:BToD1';

  protected string $name = 'BToD1';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'B To D1',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : ICC_Profile::Main
       * line : 146364
       * type : ?
       * writable : false
       * count : 
       * flags : Binary
       */
      'id' => 'ICC_Profile::Main.ICC_Profile:BToD1',
      'desc' => [
        'en' => 'B To D1',
      ],
    ],
  ];

}
