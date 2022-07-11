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
class ConfirmedObjectSize extends AbstractTagGroup
{

  protected string $id = 'IPTC:ConfirmedObjectSize';

  protected string $name = 'ConfirmedObjectSize';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Confirmed Object Size',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::PostObjectData
       * line : 152282
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'IPTC::PostObjectData.IPTC:ConfirmedObjectSize',
      'desc' => [
        'en' => 'Confirmed Object Size',
      ],
    ],
  ];

}
