<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Real_RA4;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Version2 extends AbstractTagGroup
{

  protected string $id = 'Real-RA4:Version2';

  protected string $name = 'Version2';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Version 2',
  ];

  protected int $count = 0;

  protected int $flags = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : Real::AudioV4
       * line : 330101
       * type : int16u
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'Real::AudioV4.Real-RA4:Version2',
      'desc' => [
        'en' => 'Version 2',
      ],
    ],
  ];

}
