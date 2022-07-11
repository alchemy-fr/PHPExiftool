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
class IPTCImageHeight extends AbstractTagGroup
{

  protected string $id = 'IPTC:IPTCImageHeight';

  protected string $name = 'IPTCImageHeight';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'IPTC Image Height',
    'fr' => 'Nombre de lignes',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::NewsPhoto
       * line : 151713
       * type : int16u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'IPTC::NewsPhoto.IPTC:IPTCImageHeight',
      'desc' => [
        'en' => 'IPTC Image Height',
        'fr' => 'Nombre de lignes',
      ],
    ],
  ];

}
