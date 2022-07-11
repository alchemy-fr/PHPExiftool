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
class ObjectID extends AbstractTagGroup
{

  protected string $id = 'MNG:ObjectID';

  protected string $name = 'ObjectID';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Object ID',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MNG::DefineObject
       * line : 165090
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MNG::DefineObject.MNG:ObjectID',
      'desc' => [
        'en' => 'Object ID',
      ],
    ],
    1 => [
      /**
       * table_name : MNG::DeltaPNGHeader
       * line : 165109
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MNG::DeltaPNGHeader.MNG:ObjectID',
      'desc' => [
        'en' => 'Object ID',
      ],
    ],
  ];

}
