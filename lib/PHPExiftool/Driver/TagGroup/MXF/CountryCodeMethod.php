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
class CountryCodeMethod extends AbstractTagGroup
{

  protected string $id = 'MXF:CountryCodeMethod';

  protected string $name = 'CountryCodeMethod';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Country Code Method',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 170802
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:CountryCodeMethod',
      'desc' => [
        'en' => 'Country Code Method',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 172494
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:CountryCodeMethod',
      'desc' => [
        'en' => 'Country Code Method',
      ],
    ],
  ];

}
