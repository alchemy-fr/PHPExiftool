<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_aux;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Firmware extends AbstractTagGroup
{

  protected string $id = 'XMP-aux:Firmware';

  protected string $name = 'Firmware';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Firmware',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::aux
       * line : 398269
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::aux.XMP-aux:Firmware',
      'desc' => [
        'en' => 'Firmware',
      ],
    ],
  ];

}
