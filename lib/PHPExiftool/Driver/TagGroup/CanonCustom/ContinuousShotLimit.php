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
class ContinuousShotLimit extends AbstractTagGroup
{

  protected string $id = 'CanonCustom:ContinuousShotLimit';

  protected string $name = 'ContinuousShotLimit';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Continuous Shot Limit',
    'fr' => 'Limiter nombre de vues en continu',
  ];

  protected int $count = 2;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 74514
       * type : int32s
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:ContinuousShotLimit',
      'desc' => [
        'en' => 'Continuous Shot Limit',
        'fr' => 'Limiter nombre de vues en continu',
      ],
    ],
  ];

}
