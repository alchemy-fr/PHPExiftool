<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ISOSpeedRange extends AbstractTagGroup
{

  protected string $id = 'CanonCustom:ISOSpeedRange';

  protected string $name = 'ISOSpeedRange';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'ISO Speed Range',
    'fr' => 'Régler l\'extension de sensibilité ISO',
  ];

  protected int $count = 3;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 72490
       * type : int32s
       * writable : true
       * count : 3
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:ISOSpeedRange',
      'desc' => [
        'en' => 'ISO Speed Range',
        'fr' => 'Régler l\'extension de sensibilité ISO',
      ],
    ],
  ];

}
