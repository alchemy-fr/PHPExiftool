<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Samsung;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BlurStrength extends AbstractTagGroup
{

  protected string $id = 'Samsung:BlurStrength';

  protected string $name = 'BlurStrength';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Blur Strength',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Samsung::SingleShotMeta
       * line : 334506
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Samsung::SingleShotMeta.Samsung:BlurStrength',
      'desc' => [
        'en' => 'Blur Strength',
      ],
    ],
  ];

}
