<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OriginalFileName extends AbstractTagGroup
{

  protected string $id = 'Kodak:OriginalFileName';

  protected string $name = 'OriginalFileName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Original File Name',
  ];

  protected int $count = 12;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::Type4
       * line : 160480
       * type : string
       * writable : true
       * count : 12
       * flags : Permanent
       */
      'id' => 'Kodak::Type4.Kodak:OriginalFileName',
      'desc' => [
        'en' => 'Original File Name',
      ],
    ],
  ];

}
