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
class DisplayXResolutionUnit extends AbstractTagGroup
{

  protected string $id = 'Jpeg2000:DisplayXResolutionUnit';

  protected string $name = 'DisplayXResolutionUnit';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Display X Resolution Unit',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Jpeg2000::DisplayResolution
       * line : 154232
       * type : int8s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Jpeg2000::DisplayResolution.Jpeg2000:DisplayXResolutionUnit',
      'desc' => [
        'en' => 'Display X Resolution Unit',
      ],
    ],
  ];

}
