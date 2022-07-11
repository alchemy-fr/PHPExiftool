<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_apple_fi;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ConfidenceLevel extends AbstractTagGroup
{

  protected string $id = 'XMP-apple-fi:ConfidenceLevel';

  protected string $name = 'ConfidenceLevel';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Confidence Level',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::apple_fi
       * line : 398239
       * type : integer
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::apple_fi.XMP-apple-fi:ConfidenceLevel',
      'desc' => [
        'en' => 'Confidence Level',
      ],
    ],
  ];

}
