<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class HeaderSize extends AbstractTagGroup
{

  protected string $id = 'MXF:HeaderSize';

  protected string $name = 'HeaderSize';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Header Size',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Header
       * line : 167586
       * type : int64u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Header.MXF:HeaderSize',
      'desc' => [
        'en' => 'Header Size',
      ],
    ],
  ];

}
