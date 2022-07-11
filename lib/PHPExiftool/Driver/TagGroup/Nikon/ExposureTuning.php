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
class ExposureTuning extends AbstractTagGroup
{

  protected string $id = 'Nikon:ExposureTuning';

  protected string $name = 'ExposureTuning';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Exposure Tuning',
  ];

  protected int $count = 3;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::Main
       * line : 197236
       * type : undef
       * writable : true
       * count : 3
       * flags : Permanent
       */
      'id' => 'Nikon::Main.Nikon:ExposureTuning',
      'desc' => [
        'en' => 'Exposure Tuning',
      ],
    ],
  ];

}
