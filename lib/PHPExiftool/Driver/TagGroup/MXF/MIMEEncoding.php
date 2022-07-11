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
class MIMEEncoding extends AbstractTagGroup
{

  protected string $id = 'MXF:MIMEEncoding';

  protected string $name = 'MIMEEncoding';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'MIME Encoding',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 172302
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:MIMEEncoding',
      'desc' => [
        'en' => 'MIME Encoding',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 172305
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:MIMEEncoding',
      'desc' => [
        'en' => 'MIME Encoding',
      ],
    ],
  ];

}
