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
class FormerFamilyName extends AbstractTagGroup
{

  protected string $id = 'MXF:FormerFamilyName';

  protected string $name = 'FormerFamilyName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Former Family Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 171407
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:FormerFamilyName',
      'desc' => [
        'en' => 'Former Family Name',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 171410
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:FormerFamilyName',
      'desc' => [
        'en' => 'Former Family Name',
      ],
    ],
  ];

}
