<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BaseISO extends AbstractTagGroup
{

  protected string $id = 'KodakIFD:BaseISO';

  protected string $name = 'BaseISO';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Base ISO',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::IFD
       * line : 155665
       * type : rational64u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::IFD.KodakIFD:BaseISO',
      'desc' => [
        'en' => 'Base ISO',
      ],
    ],
  ];

}
