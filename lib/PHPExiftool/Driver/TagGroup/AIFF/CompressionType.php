<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\AIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CompressionType extends AbstractTagGroup
{

  protected string $id = 'AIFF:CompressionType';

  protected string $name = 'CompressionType';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Compression Type',
  ];

  protected int $count = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : AIFF::Common
       * line : 113
       * type : string
       * writable : false
       * count : 4
       * flags : 
       */
      'id' => 'AIFF::Common.AIFF:CompressionType',
      'desc' => [
        'en' => 'Compression Type',
      ],
    ],
  ];

}
