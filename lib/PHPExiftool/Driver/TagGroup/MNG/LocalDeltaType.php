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
class LocalDeltaType extends AbstractTagGroup
{

  protected string $id = 'MNG:LocalDeltaType';

  protected string $name = 'LocalDeltaType';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Local Delta Type',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MNG::CloneObject
       * line : 165071
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MNG::CloneObject.MNG:LocalDeltaType',
      'desc' => [
        'en' => 'Local Delta Type',
      ],
    ],
  ];

}
