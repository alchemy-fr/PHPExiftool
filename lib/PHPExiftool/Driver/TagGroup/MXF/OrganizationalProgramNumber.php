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
class OrganizationalProgramNumber extends AbstractTagGroup
{

  protected string $id = 'MXF:OrganizationalProgramNumber';

  protected string $name = 'OrganizationalProgramNumber';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Organizational Program Number',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 170134
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:OrganizationalProgramNumber',
      'desc' => [
        'en' => 'Organizational Program Number',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 170137
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:OrganizationalProgramNumber',
      'desc' => [
        'en' => 'Organizational Program Number',
      ],
    ],
  ];

}
