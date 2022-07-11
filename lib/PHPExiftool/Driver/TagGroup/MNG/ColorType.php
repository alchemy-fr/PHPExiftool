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
class ColorType extends AbstractTagGroup
{

  protected string $id = 'MNG:ColorType';

  protected string $name = 'ColorType';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Color Type',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MNG::BasisObject
       * line : 164912
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MNG::BasisObject.MNG:ColorType',
      'desc' => [
        'en' => 'Color Type',
      ],
    ],
    1 => [
      /**
       * table_name : MNG::JNGHeader
       * line : 165245
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MNG::JNGHeader.MNG:ColorType',
      'desc' => [
        'en' => 'Color Type',
      ],
    ],
  ];

}
