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
class OrganizationID extends AbstractTagGroup
{

  protected string $id = 'MXF:OrganizationID';

  protected string $name = 'OrganizationID';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Organization ID',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 167594
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:OrganizationID',
      'desc' => [
        'en' => 'Organization ID',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 170095
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:OrganizationID',
      'desc' => [
        'en' => 'Organization ID',
      ],
    ],
  ];

}
