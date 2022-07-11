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
class IntellectualPropertyRights extends AbstractTagGroup
{

  protected string $id = 'MXF:IntellectualPropertyRights';

  protected string $name = 'IntellectualPropertyRights';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Intellectual Property Rights',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 167797
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:IntellectualPropertyRights',
      'desc' => [
        'en' => 'Intellectual Property Rights',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 170266
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:IntellectualPropertyRights',
      'desc' => [
        'en' => 'Intellectual Property Rights',
      ],
    ],
  ];

}
