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
class ISOExpansion extends AbstractTagGroup
{

  protected string $id = 'Nikon:ISOExpansion';

  protected string $name = 'ISOExpansion';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'ISO Expansion',
    'fr' => 'Extension sensibilité ISO',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::ISOInfo
       * line : 195730
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ISOInfo.Nikon:ISOExpansion',
      'desc' => [
        'en' => 'ISO Expansion',
        'fr' => 'Extension sensibilité ISO',
      ],
    ],
  ];

}
