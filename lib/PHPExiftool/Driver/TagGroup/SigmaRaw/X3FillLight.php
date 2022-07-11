<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SigmaRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class X3FillLight extends AbstractTagGroup
{

  protected string $id = 'SigmaRaw:X3FillLight';

  protected string $name = 'X3FillLight';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'X3 Fill Light',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : SigmaRaw::HeaderExt
       * line : 339916
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'SigmaRaw::HeaderExt.SigmaRaw:X3FillLight',
      'desc' => [
        'en' => 'X3 Fill Light',
      ],
    ],
  ];

}
