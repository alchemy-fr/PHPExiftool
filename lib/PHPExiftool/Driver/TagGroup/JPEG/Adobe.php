<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\JPEG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Adobe extends AbstractTagGroup
{

  protected string $id = 'JPEG:Adobe';

  protected string $name = 'Adobe';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Adobe',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : JPEG::Main
       * line : 152987
       * type : undef
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'JPEG::Main.JPEG:Adobe',
      'desc' => [
        'en' => 'Adobe',
      ],
    ],
  ];

}
