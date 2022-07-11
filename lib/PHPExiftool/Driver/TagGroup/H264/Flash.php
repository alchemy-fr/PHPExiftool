<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\H264;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Flash extends AbstractTagGroup
{

  protected string $id = 'H264:Flash';

  protected string $name = 'Flash';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Flash',
    'fr' => 'Flash',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : H264::MDPM
       * line : 140976
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'H264::MDPM.H264:Flash',
      'desc' => [
        'en' => 'Flash',
        'fr' => 'Flash',
      ],
    ],
  ];

}
