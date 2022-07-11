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
class MXFVersion extends AbstractTagGroup
{

  protected string $id = 'MXF:MXFVersion';

  protected string $name = 'MXFVersion';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'MXF Version',
  ];

  protected int $count = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Header
       * line : 167580
       * type : int16u
       * writable : false
       * count : 2
       * flags : 
       */
      'id' => 'MXF::Header.MXF:MXFVersion',
      'desc' => [
        'en' => 'MXF Version',
      ],
    ],
  ];

}
