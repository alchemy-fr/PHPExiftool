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
class IPTCPictureNumber extends AbstractTagGroup
{

  protected string $id = 'IPTC:IPTCPictureNumber';

  protected string $name = 'IPTCPictureNumber';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'IPTC Picture Number',
    'fr' => 'Numéro d\'image',
  ];

  protected int $count = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::NewsPhoto
       * line : 151693
       * type : string
       * writable : true
       * count : 16
       * flags : 
       */
      'id' => 'IPTC::NewsPhoto.IPTC:IPTCPictureNumber',
      'desc' => [
        'en' => 'IPTC Picture Number',
        'fr' => 'Numéro d\'image',
      ],
    ],
  ];

}
