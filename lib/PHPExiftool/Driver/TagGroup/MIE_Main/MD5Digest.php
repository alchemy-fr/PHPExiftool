<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MIE_Main;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MD5Digest extends AbstractTagGroup
{

  protected string $id = 'MIE-Main:MD5Digest';

  protected string $name = 'MD5Digest';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'MD5 Digest',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MIE::Main
       * line : 164415
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'MIE::Main.MIE-Main:MD5Digest',
      'desc' => [
        'en' => 'MD5 Digest',
      ],
    ],
  ];

}
