<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLIR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CreatorSoftware extends AbstractTagGroup
{

  protected string $id = 'FLIR:CreatorSoftware';

  protected string $name = 'CreatorSoftware';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Creator Software',
  ];

  protected int $count = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::Header
       * line : 123545
       * type : string
       * writable : false
       * count : 16
       * flags : 
       */
      'id' => 'FLIR::Header.FLIR:CreatorSoftware',
      'desc' => [
        'en' => 'Creator Software',
      ],
    ],
  ];

}
