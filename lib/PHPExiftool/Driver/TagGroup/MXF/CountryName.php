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
class CountryName extends AbstractTagGroup
{

  protected string $id = 'MXF:CountryName';

  protected string $name = 'CountryName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Country Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 168789
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:CountryName',
      'desc' => [
        'en' => 'Country Name',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 170434
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:CountryName',
      'desc' => [
        'en' => 'Country Name',
      ],
    ],
    2 => [
      /**
       * table_name : MXF::Main
       * line : 170437
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:CountryName',
      'desc' => [
        'en' => 'Country Name',
      ],
    ],
    3 => [
      /**
       * table_name : MXF::Main
       * line : 170850
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:CountryName',
      'desc' => [
        'en' => 'Country Name',
      ],
    ],
  ];

}
