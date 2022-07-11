<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MOI;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MOIVersion extends AbstractTagGroup
{

  protected string $id = 'MOI:MOIVersion';

  protected string $name = 'MOIVersion';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'MOI Version',
  ];

  protected int $count = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : MOI::Main
       * line : 165780
       * type : string
       * writable : false
       * count : 2
       * flags : 
       */
      'id' => 'MOI::Main.MOI:MOIVersion',
      'desc' => [
        'en' => 'MOI Version',
      ],
    ],
  ];

}
