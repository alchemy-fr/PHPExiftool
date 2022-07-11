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
class AFPointsUnknown1 extends AbstractTagGroup
{

  protected string $id = 'Pentax:AFPointsUnknown1';

  protected string $name = 'AFPointsUnknown1';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF Points Unknown 1',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::AFInfo
       * line : 283666
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Pentax::AFInfo.Pentax:AFPointsUnknown1',
      'desc' => [
        'en' => 'AF Points Unknown 1',
      ],
    ],
  ];

}
