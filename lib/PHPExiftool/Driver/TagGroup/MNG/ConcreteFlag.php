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
class ConcreteFlag extends AbstractTagGroup
{

  protected string $id = 'MNG:ConcreteFlag';

  protected string $name = 'ConcreteFlag';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Concrete Flag',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MNG::CloneObject
       * line : 165068
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MNG::CloneObject.MNG:ConcreteFlag',
      'desc' => [
        'en' => 'Concrete Flag',
      ],
    ],
    1 => [
      /**
       * table_name : MNG::DefineObject
       * line : 165096
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MNG::DefineObject.MNG:ConcreteFlag',
      'desc' => [
        'en' => 'Concrete Flag',
      ],
    ],
  ];

}
