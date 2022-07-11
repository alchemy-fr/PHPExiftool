<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ID3v1_Enh;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Speed extends AbstractTagGroup
{

  protected string $id = 'ID3v1_Enh:Speed';

  protected string $name = 'Speed';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Speed',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : ID3::v1_Enh
       * line : 148321
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ID3::v1_Enh.ID3v1_Enh:Speed',
      'desc' => [
        'en' => 'Speed',
      ],
    ],
  ];

}
