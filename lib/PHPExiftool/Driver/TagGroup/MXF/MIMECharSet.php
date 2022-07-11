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
class MIMECharSet extends AbstractTagGroup
{

  protected string $id = 'MXF:MIMECharSet';

  protected string $name = 'MIMECharSet';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'MIME Char Set',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 172296
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:MIMECharSet',
      'desc' => [
        'en' => 'MIME Char Set',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 172299
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:MIMECharSet',
      'desc' => [
        'en' => 'MIME Char Set',
      ],
    ],
  ];

}
