<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MIE_Geo;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Address extends AbstractTagGroup
{

  protected string $id = 'MIE-Geo:Address';

  protected string $name = 'Address';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Address',
    'fr' => 'Adresse',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MIE::Geo
       * line : 164080
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'MIE::Geo.MIE-Geo:Address',
      'desc' => [
        'en' => 'Address',
        'fr' => 'Adresse',
      ],
    ],
  ];

}
