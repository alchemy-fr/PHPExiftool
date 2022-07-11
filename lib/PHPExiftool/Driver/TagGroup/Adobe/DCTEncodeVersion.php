<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Adobe;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DCTEncodeVersion extends AbstractTagGroup
{

  protected string $id = 'Adobe:DCTEncodeVersion';

  protected string $name = 'DCTEncodeVersion';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'DCT Encode Version',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : JPEG::Adobe
       * line : 152726
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'JPEG::Adobe.Adobe:DCTEncodeVersion',
      'desc' => [
        'en' => 'DCT Encode Version',
      ],
    ],
  ];

}
