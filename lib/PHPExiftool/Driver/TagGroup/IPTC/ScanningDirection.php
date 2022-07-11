<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IPTC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ScanningDirection extends AbstractTagGroup
{

  protected string $id = 'IPTC:ScanningDirection';

  protected string $name = 'ScanningDirection';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Scanning Direction',
    'fr' => 'Direction de scannage',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::NewsPhoto
       * line : 152017
       * type : int8u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'IPTC::NewsPhoto.IPTC:ScanningDirection',
      'desc' => [
        'en' => 'Scanning Direction',
        'fr' => 'Direction de scannage',
      ],
    ],
  ];

}
