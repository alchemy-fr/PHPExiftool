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
class PentaxVersion extends AbstractTagGroup
{

  protected string $id = 'Pentax:PentaxVersion';

  protected string $name = 'PentaxVersion';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Pentax Version',
    'fr' => 'Version Pentax',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::Main
       * line : 295090
       * type : int8u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Pentax::Main.Pentax:PentaxVersion',
      'desc' => [
        'en' => 'Pentax Version',
        'fr' => 'Version Pentax',
      ],
    ],
  ];

}
