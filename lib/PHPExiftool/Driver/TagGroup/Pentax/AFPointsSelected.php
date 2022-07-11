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
class AFPointsSelected extends AbstractTagGroup
{

  protected string $id = 'Pentax:AFPointsSelected';

  protected string $name = 'AFPointsSelected';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'AF Points Selected',
    'fr' => 'Points AF sélectionnés',
  ];

  protected int $count = 9;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::AFPointInfo
       * line : 284010
       * type : int8u
       * writable : false
       * count : 9
       * flags : Permanent
       */
      'id' => 'Pentax::AFPointInfo.Pentax:AFPointsSelected',
      'desc' => [
        'en' => 'AF Points Selected',
        'fr' => 'Points AF sélectionnés',
      ],
    ],
  ];

}
