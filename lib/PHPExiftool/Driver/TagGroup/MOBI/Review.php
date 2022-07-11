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
class Review extends AbstractTagGroup
{

  protected string $id = 'MOBI:Review';

  protected string $name = 'Review';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Review',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Palm::EXTH
       * line : 273825
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Palm::EXTH.MOBI:Review',
      'desc' => [
        'en' => 'Review',
      ],
    ],
  ];

}
