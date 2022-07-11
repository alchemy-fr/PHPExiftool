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
class PostalCode extends AbstractTagGroup
{

  protected string $id = 'MXF:PostalCode';

  protected string $name = 'PostalCode';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Postal Code',
    'fr' => 'Code Postal',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 168784
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:PostalCode',
      'desc' => [
        'en' => 'Postal Code',
        'fr' => 'Code Postal',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 170845
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:PostalCode',
      'desc' => [
        'en' => 'Postal Code',
        'fr' => 'Code Postal',
      ],
    ],
  ];

}
