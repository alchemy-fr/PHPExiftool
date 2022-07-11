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
class DefaultNamespaceURI extends AbstractTagGroup
{

  protected string $id = 'MXF:DefaultNamespaceURI';

  protected string $name = 'DefaultNamespaceURI';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Default Namespace URI',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 172212
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:DefaultNamespaceURI',
      'desc' => [
        'en' => 'Default Namespace URI',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 172215
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:DefaultNamespaceURI',
      'desc' => [
        'en' => 'Default Namespace URI',
      ],
    ],
  ];

}
