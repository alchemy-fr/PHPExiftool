<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFPointsSelected extends AbstractTagGroup
{

  protected string $id = 'Nikon:AFPointsSelected';

  protected string $name = 'AFPointsSelected';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF Points Selected',
    'fr' => 'Points AF sélectionnés',
  ];

  protected int $count = 20;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 190332
       * type : undef
       * writable : true
       * count : 20
       * flags : Permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:AFPointsSelected',
      'desc' => [
        'en' => 'AF Points Selected',
        'fr' => 'Points AF sélectionnés',
      ],
    ],
  ];

}
