<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SPIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SPIFFVersion extends AbstractTagGroup
{

  protected string $id = 'SPIFF:SPIFFVersion';

  protected string $name = 'SPIFFVersion';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'SPIFF Version',
    'fr' => 'Version SPIFF',
  ];

  protected int $count = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : JPEG::SPIFF
       * line : 153400
       * type : int8u
       * writable : false
       * count : 2
       * flags : 
       */
      'id' => 'JPEG::SPIFF.SPIFF:SPIFFVersion',
      'desc' => [
        'en' => 'SPIFF Version',
        'fr' => 'Version SPIFF',
      ],
    ],
  ];

}
