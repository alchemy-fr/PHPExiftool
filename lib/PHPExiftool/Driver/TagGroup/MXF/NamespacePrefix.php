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
class NamespacePrefix extends AbstractTagGroup
{

  protected string $id = 'MXF:NamespacePrefix';

  protected string $name = 'NamespacePrefix';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Namespace Prefix',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 172236
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:NamespacePrefix',
      'desc' => [
        'en' => 'Namespace Prefix',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 172239
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:NamespacePrefix',
      'desc' => [
        'en' => 'Namespace Prefix',
      ],
    ],
  ];

}
