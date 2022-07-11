<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class HorizontalActionSafePercentage extends AbstractTagGroup
{

  protected string $id = 'MXF:HorizontalActionSafePercentage';

  protected string $name = 'HorizontalActionSafePercentage';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Horizontal Action Safe Percentage',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 170589
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:HorizontalActionSafePercentage',
      'desc' => [
        'en' => 'Horizontal Action Safe Percentage',
      ],
    ],
  ];

}
