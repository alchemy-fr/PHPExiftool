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
class IPTCPixelWidth extends AbstractTagGroup
{

  protected string $id = 'IPTC:IPTCPixelWidth';

  protected string $name = 'IPTCPixelWidth';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'IPTC Pixel Width',
    'fr' => 'Taille de pixel dans la direction de scan',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::NewsPhoto
       * line : 151723
       * type : int16u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'IPTC::NewsPhoto.IPTC:IPTCPixelWidth',
      'desc' => [
        'en' => 'IPTC Pixel Width',
        'fr' => 'Taille de pixel dans la direction de scan',
      ],
    ],
  ];

}
