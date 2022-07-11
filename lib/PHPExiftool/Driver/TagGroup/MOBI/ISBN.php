<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MOBI;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ISBN extends AbstractTagGroup
{

  protected string $id = 'MOBI:ISBN';

  protected string $name = 'ISBN';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'ISBN',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Palm::EXTH
       * line : 273804
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Palm::EXTH.MOBI:ISBN',
      'desc' => [
        'en' => 'ISBN',
      ],
    ],
  ];

}
