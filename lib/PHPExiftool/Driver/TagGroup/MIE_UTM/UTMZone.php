<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MIE_UTM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class UTMZone extends AbstractTagGroup
{

  protected string $id = 'MIE-UTM:UTMZone';

  protected string $name = 'UTMZone';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'UTM Zone',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MIE::UTM
       * line : 164553
       * type : int8s
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'MIE::UTM.MIE-UTM:UTMZone',
      'desc' => [
        'en' => 'UTM Zone',
      ],
    ],
  ];

}
