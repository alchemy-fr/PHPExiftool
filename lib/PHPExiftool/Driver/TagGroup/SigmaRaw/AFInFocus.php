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
class AFInFocus extends AbstractTagGroup
{

  protected string $id = 'SigmaRaw:AFInFocus';

  protected string $name = 'AFInFocus';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'AF In Focus',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : SigmaRaw::Properties
       * line : 340027
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'SigmaRaw::Properties.SigmaRaw:AFInFocus',
      'desc' => [
        'en' => 'AF In Focus',
      ],
    ],
  ];

}
