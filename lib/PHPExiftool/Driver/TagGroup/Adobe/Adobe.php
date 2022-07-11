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
class Adobe extends AbstractTagGroup
{

  protected string $id = 'Adobe:Adobe';

  protected string $name = 'Adobe';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Adobe',
  ];

  protected int $count = 0;

  protected int $flags = 18;

  protected array $tags = [
    0 => [
      /**
       * table_name : Extra
       * line : 121315
       * type : ?
       * writable : true
       * count : 
       * flags : Binary,Unsafe
       */
      'id' => 'Extra.Adobe:Adobe',
      'desc' => [
        'en' => 'Adobe',
      ],
    ],
  ];

}
