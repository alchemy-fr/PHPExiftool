<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SignificantBits extends AbstractTagGroup
{

  protected string $id = 'PNG:SignificantBits';

  protected string $name = 'SignificantBits';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Significant Bits',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PNG::Main
       * line : 272940
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PNG::Main.PNG:SignificantBits',
      'desc' => [
        'en' => 'Significant Bits',
      ],
    ],
  ];

}
