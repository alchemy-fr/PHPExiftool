<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Ricoh;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ManufactureDate1 extends AbstractTagGroup
{

  protected string $id = 'Ricoh:ManufactureDate1';

  protected string $name = 'ManufactureDate1';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Manufacture Date 1',
  ];

  protected int $count = 20;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Ricoh::Subdir
       * line : 334078
       * type : string
       * writable : true
       * count : 20
       * flags : Permanent
       */
      'id' => 'Ricoh::Subdir.Ricoh:ManufactureDate1',
      'desc' => [
        'en' => 'Manufacture Date 1',
      ],
    ],
  ];

}
