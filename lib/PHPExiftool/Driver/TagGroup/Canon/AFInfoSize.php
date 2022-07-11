<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFInfoSize extends AbstractTagGroup
{

  protected string $id = 'Canon:AFInfoSize';

  protected string $name = 'AFInfoSize';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'AF Info Size',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::AFInfo2
       * line : 4119
       * type : int16u
       * writable : false
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::AFInfo2.Canon:AFInfoSize',
      'desc' => [
        'en' => 'AF Info Size',
      ],
    ],
  ];

}
