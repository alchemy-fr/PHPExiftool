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
class FooterPosition extends AbstractTagGroup
{

  protected string $id = 'MXF:FooterPosition';

  protected string $name = 'FooterPosition';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Footer Position',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Header
       * line : 167583
       * type : int64u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Header.MXF:FooterPosition',
      'desc' => [
        'en' => 'Footer Position',
      ],
    ],
  ];

}
