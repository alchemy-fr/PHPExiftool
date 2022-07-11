<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFPointsUnknown2 extends AbstractTagGroup
{

  protected string $id = 'Pentax:AFPointsUnknown2';

  protected string $name = 'AFPointsUnknown2';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF Points Unknown 2',
    'fr' => 'Points AF inconnus 2',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::AFInfo
       * line : 283733
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Pentax::AFInfo.Pentax:AFPointsUnknown2',
      'desc' => [
        'en' => 'AF Points Unknown 2',
        'fr' => 'Points AF inconnus 2',
      ],
    ],
  ];

}
