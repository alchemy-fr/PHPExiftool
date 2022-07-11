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
class EnumerationUnderlyingIntegerType extends AbstractTagGroup
{

  protected string $id = 'MXF:EnumerationUnderlyingIntegerType';

  protected string $name = 'EnumerationUnderlyingIntegerType';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Enumeration Underlying Integer Type',
  ];

  protected int $count = 0;

  protected int $flags = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 169974
       * type : ?
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'MXF::Main.MXF:EnumerationUnderlyingIntegerType',
      'desc' => [
        'en' => 'Enumeration Underlying Integer Type',
      ],
    ],
  ];

}
