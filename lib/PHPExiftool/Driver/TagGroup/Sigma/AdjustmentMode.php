<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sigma;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AdjustmentMode extends AbstractTagGroup
{

  protected string $id = 'Sigma:AdjustmentMode';

  protected string $name = 'AdjustmentMode';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Adjustment Mode',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sigma::Main
       * line : 337732
       * type : string
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sigma::Main.Sigma:AdjustmentMode',
      'desc' => [
        'en' => 'Adjustment Mode',
      ],
    ],
  ];

}
