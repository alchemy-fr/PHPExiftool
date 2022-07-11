<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PSP;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class NumColors extends AbstractTagGroup
{

  protected string $id = 'PSP:NumColors';

  protected string $name = 'NumColors';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Num Colors',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PSP::Image
       * line : 273723
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PSP::Image.PSP:NumColors',
      'desc' => [
        'en' => 'Num Colors',
      ],
    ],
  ];

}
