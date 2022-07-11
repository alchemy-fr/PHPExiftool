<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_photomech;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CountryCode extends AbstractTagGroup
{

  protected string $id = 'XMP-photomech:CountryCode';

  protected string $name = 'CountryCode';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Country Code',
    'fr' => 'Code pays',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : PhotoMechanic::XMP
       * line : 305264
       * type : string
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'PhotoMechanic::XMP.XMP-photomech:CountryCode',
      'desc' => [
        'en' => 'Country Code',
        'fr' => 'Code pays',
      ],
    ],
  ];

}
