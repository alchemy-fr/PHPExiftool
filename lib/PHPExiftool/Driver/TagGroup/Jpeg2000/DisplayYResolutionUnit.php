<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Jpeg2000;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DisplayYResolutionUnit extends AbstractTagGroup
{

  protected string $id = 'Jpeg2000:DisplayYResolutionUnit';

  protected string $name = 'DisplayYResolutionUnit';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Display Y Resolution Unit',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Jpeg2000::DisplayResolution
       * line : 154181
       * type : int8s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Jpeg2000::DisplayResolution.Jpeg2000:DisplayYResolutionUnit',
      'desc' => [
        'en' => 'Display Y Resolution Unit',
      ],
    ],
  ];

}
