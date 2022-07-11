<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Casio;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ManufactureIndex extends AbstractTagGroup
{

  protected string $id = 'Casio:ManufactureIndex';

  protected string $name = 'ManufactureIndex';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Manufacture Index',
  ];

  protected int $count = 9;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Casio::QVCI
       * line : 85229
       * type : string
       * writable : false
       * count : 9
       * flags : Permanent
       */
      'id' => 'Casio::QVCI.Casio:ManufactureIndex',
      'desc' => [
        'en' => 'Manufacture Index',
      ],
    ],
  ];

}
