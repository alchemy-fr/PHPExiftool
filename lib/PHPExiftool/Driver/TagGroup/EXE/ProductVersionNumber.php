<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\EXE;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ProductVersionNumber extends AbstractTagGroup
{

  protected string $id = 'EXE:ProductVersionNumber';

  protected string $name = 'ProductVersionNumber';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Product Version Number',
  ];

  protected int $count = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : EXE::PEVersion
       * line : 109924
       * type : int16u
       * writable : false
       * count : 4
       * flags : 
       */
      'id' => 'EXE::PEVersion.EXE:ProductVersionNumber',
      'desc' => [
        'en' => 'Product Version Number',
      ],
    ],
  ];

}
