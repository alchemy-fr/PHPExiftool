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
class ApertureRange extends AbstractTagGroup
{

  protected string $id = 'CanonCustom:ApertureRange';

  protected string $name = 'ApertureRange';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Aperture Range',
    'fr' => 'Régler gamme d\'ouvertures',
  ];

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 72810
       * type : int32s
       * writable : true
       * count : 3
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:ApertureRange',
      'desc' => [
        'en' => 'Aperture Range',
        'fr' => 'Régler gamme d\'ouvertures',
      ],
    ],
    1 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 72832
       * type : int32s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:ApertureRange',
      'desc' => [
        'en' => 'Aperture Range',
        'fr' => 'Régler gamme d\'ouvertures',
      ],
    ],
  ];

}
