<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ToneCurveMatching extends AbstractTagGroup
{

  protected string $id = 'Canon:ToneCurveMatching';

  protected string $name = 'ToneCurveMatching';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Tone Curve Matching',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::Main
       * line : 65937
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::Main.Canon:ToneCurveMatching',
      'desc' => [
        'en' => 'Tone Curve Matching',
      ],
    ],
  ];

}
