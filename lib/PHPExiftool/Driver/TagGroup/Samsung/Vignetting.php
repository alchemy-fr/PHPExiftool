<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Samsung;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Vignetting extends AbstractTagGroup
{

  protected string $id = 'Samsung:Vignetting';

  protected string $name = 'Vignetting';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Vignetting',
  ];

  protected int $count = 15;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Samsung::Type2
       * line : 335963
       * type : int16u
       * writable : true
       * count : 15
       * flags : Permanent,Unknown
       */
      'id' => 'Samsung::Type2.Samsung:Vignetting',
      'desc' => [
        'en' => 'Vignetting',
      ],
    ],
  ];

}
