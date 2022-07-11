<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DoNotShow extends AbstractTagGroup
{

  protected string $id = 'MNG:DoNotShow';

  protected string $name = 'DoNotShow';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Do Not Show',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MNG::CloneObject
       * line : 165065
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MNG::CloneObject.MNG:DoNotShow',
      'desc' => [
        'en' => 'Do Not Show',
      ],
    ],
    1 => [
      /**
       * table_name : MNG::DefineObject
       * line : 165093
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MNG::DefineObject.MNG:DoNotShow',
      'desc' => [
        'en' => 'Do Not Show',
      ],
    ],
  ];

}
