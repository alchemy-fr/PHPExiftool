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
class AEBAutoCancel extends AbstractTagGroup
{

  protected string $id = 'CanonCustom:AEBAutoCancel';

  protected string $name = 'AEBAutoCancel';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AEB Auto Cancel',
    'fr' => 'Annulation bracketing auto',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 72538
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:AEBAutoCancel',
      'desc' => [
        'en' => 'AEB Auto Cancel',
        'fr' => 'Annulation bracketing auto',
      ],
    ],
  ];

}
