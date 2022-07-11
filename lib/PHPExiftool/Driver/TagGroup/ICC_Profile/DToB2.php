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
class DToB2 extends AbstractTagGroup
{

  protected string $id = 'ICC_Profile:DToB2';

  protected string $name = 'DToB2';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'D To B2',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : ICC_Profile::Main
       * line : 146382
       * type : ?
       * writable : false
       * count : 
       * flags : Binary
       */
      'id' => 'ICC_Profile::Main.ICC_Profile:DToB2',
      'desc' => [
        'en' => 'D To B2',
      ],
    ],
  ];

}
