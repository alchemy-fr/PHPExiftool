<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MIE_Orient;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Azimuth extends AbstractTagGroup
{

  protected string $id = 'MIE-Orient:Azimuth';

  protected string $name = 'Azimuth';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Azimuth',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MIE::Orient
       * line : 164427
       * type : rational64s
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'MIE::Orient.MIE-Orient:Azimuth',
      'desc' => [
        'en' => 'Azimuth',
      ],
    ],
  ];

}
