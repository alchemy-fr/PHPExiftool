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
class WBShiftGM extends AbstractTagGroup
{

  protected string $id = 'Canon:WBShiftGM';

  protected string $name = 'WBShiftGM';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB Shift GM',
    'fr' => 'Décalage Balance Blancs vert-magenta',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::Processing
       * line : 70034
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::Processing.Canon:WBShiftGM',
      'desc' => [
        'en' => 'WB Shift GM',
        'fr' => 'Décalage Balance Blancs vert-magenta',
      ],
    ],
  ];

}
