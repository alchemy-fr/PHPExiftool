<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_ast;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSLatitudeRef extends AbstractTagGroup
{

  protected string $id = 'XMP-ast:GPSLatitudeRef';

  protected string $name = 'GPSLatitudeRef';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'GPS Latitude Ref',
    'fr' => 'Latitude nord ou sud',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::ast
       * line : 210219
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Nikon::ast.XMP-ast:GPSLatitudeRef',
      'desc' => [
        'en' => 'GPS Latitude Ref',
        'fr' => 'Latitude nord ou sud',
      ],
    ],
  ];

}
