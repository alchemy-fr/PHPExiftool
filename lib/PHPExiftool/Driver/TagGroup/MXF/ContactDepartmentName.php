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
class ContactDepartmentName extends AbstractTagGroup
{

  protected string $id = 'MXF:ContactDepartmentName';

  protected string $name = 'ContactDepartmentName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Contact Department Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 167903
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:ContactDepartmentName',
      'desc' => [
        'en' => 'Contact Department Name',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 170396
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:ContactDepartmentName',
      'desc' => [
        'en' => 'Contact Department Name',
      ],
    ],
  ];

}
