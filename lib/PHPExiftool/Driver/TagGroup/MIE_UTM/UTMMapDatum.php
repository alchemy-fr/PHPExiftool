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
class UTMMapDatum extends AbstractTagGroup
{

  protected string $id = 'MIE-UTM:UTMMapDatum';

  protected string $name = 'UTMMapDatum';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'UTM Map Datum',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MIE::UTM
       * line : 164544
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'MIE::UTM.MIE-UTM:UTMMapDatum',
      'desc' => [
        'en' => 'UTM Map Datum',
      ],
    ],
  ];

}
