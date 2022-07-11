<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Samsung;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CbCrMatrixDefault extends AbstractTagGroup
{

  protected string $id = 'Samsung:CbCrMatrixDefault';

  protected string $name = 'CbCrMatrixDefault';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Cb Cr Matrix Default',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Samsung::Type2
       * line : 335927
       * type : int32s
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Samsung::Type2.Samsung:CbCrMatrixDefault',
      'desc' => [
        'en' => 'Cb Cr Matrix Default',
      ],
    ],
  ];

}
