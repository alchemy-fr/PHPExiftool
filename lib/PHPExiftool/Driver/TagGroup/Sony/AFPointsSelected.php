<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFPointsSelected extends AbstractTagGroup
{

  protected string $id = 'Sony:AFPointsSelected';

  protected string $name = 'AFPointsSelected';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF Points Selected',
    'fr' => 'Points AF sélectionnés',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Tag940a
       * line : 390626
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag940a.Sony:AFPointsSelected',
      'desc' => [
        'en' => 'AF Points Selected',
        'fr' => 'Points AF sélectionnés',
      ],
    ],
  ];

}
