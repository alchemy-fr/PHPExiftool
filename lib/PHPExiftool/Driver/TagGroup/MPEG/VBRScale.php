<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MPEG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VBRScale extends AbstractTagGroup
{

  protected string $id = 'MPEG:VBRScale';

  protected string $name = 'VBRScale';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'VBR Scale',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MPEG::Xing
       * line : 166476
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MPEG::Xing.MPEG:VBRScale',
      'desc' => [
        'en' => 'VBR Scale',
      ],
    ],
  ];

}
