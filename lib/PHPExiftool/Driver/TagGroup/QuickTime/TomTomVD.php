<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TomTomVD extends AbstractTagGroup
{

  protected string $id = 'QuickTime:TomTomVD';

  protected string $name = 'TomTomVD';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Tom Tom VD',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::TomTom
       * line : 325365
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::TomTom.QuickTime:TomTomVD',
      'desc' => [
        'en' => 'Tom Tom VD',
      ],
    ],
  ];

}
