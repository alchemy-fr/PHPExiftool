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
class SourceOrganization extends AbstractTagGroup
{

  protected string $id = 'MXF:SourceOrganization';

  protected string $name = 'SourceOrganization';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Source Organization',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 167774
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:SourceOrganization',
      'desc' => [
        'en' => 'Source Organization',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 172350
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:SourceOrganization',
      'desc' => [
        'en' => 'Source Organization',
      ],
    ],
  ];

}
