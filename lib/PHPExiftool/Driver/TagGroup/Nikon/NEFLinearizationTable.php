<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class NEFLinearizationTable extends AbstractTagGroup
{

  protected string $id = 'Nikon:NEFLinearizationTable';

  protected string $name = 'NEFLinearizationTable';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'NEF Linearization Table',
    'fr' => 'Table de Linearization',
  ];

  protected int $count = 0;

  protected int $flags = 22;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::Main
       * line : 197844
       * type : undef
       * writable : true
       * count : 
       * flags : Binary,Permanent,Unsafe
       */
      'id' => 'Nikon::Main.Nikon:NEFLinearizationTable',
      'desc' => [
        'en' => 'NEF Linearization Table',
        'fr' => 'Table de Linearization',
      ],
    ],
  ];

}
