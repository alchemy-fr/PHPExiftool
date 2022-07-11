<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DeviantWhiteCustom extends AbstractTagGroup
{

  protected string $id = 'KodakIFD:DeviantWhiteCustom';

  protected string $name = 'DeviantWhiteCustom';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Deviant White Custom',
  ];

  protected int $count = 3;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::IFD
       * line : 155526
       * type : rational64s
       * writable : true
       * count : 3
       * flags : Permanent
       */
      'id' => 'Kodak::IFD.KodakIFD:DeviantWhiteCustom',
      'desc' => [
        'en' => 'Deviant White Custom',
      ],
    ],
  ];

}
