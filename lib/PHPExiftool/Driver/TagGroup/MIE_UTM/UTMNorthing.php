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
class UTMNorthing extends AbstractTagGroup
{

  protected string $id = 'MIE-UTM:UTMNorthing';

  protected string $name = 'UTMNorthing';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'UTM Northing',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MIE::UTM
       * line : 164550
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'MIE::UTM.MIE-UTM:UTMNorthing',
      'desc' => [
        'en' => 'UTM Northing',
      ],
    ],
  ];

}
