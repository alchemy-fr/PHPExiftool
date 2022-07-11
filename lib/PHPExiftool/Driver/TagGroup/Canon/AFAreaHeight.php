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
class AFAreaHeight extends AbstractTagGroup
{

  protected string $id = 'Canon:AFAreaHeight';

  protected string $name = 'AFAreaHeight';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'AF Area Height',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::AFInfo
       * line : 4072
       * type : int16u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::AFInfo.Canon:AFAreaHeight',
      'desc' => [
        'en' => 'AF Area Height',
      ],
    ],
  ];

}
