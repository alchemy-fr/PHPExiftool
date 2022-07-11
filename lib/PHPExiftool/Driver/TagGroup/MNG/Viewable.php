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
class Viewable extends AbstractTagGroup
{

  protected string $id = 'MNG:Viewable';

  protected string $name = 'Viewable';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Viewable',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MNG::BasisObject
       * line : 165012
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MNG::BasisObject.MNG:Viewable',
      'desc' => [
        'en' => 'Viewable',
      ],
    ],
  ];

}
