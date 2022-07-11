<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TDA1EdgePolarity extends AbstractTagGroup
{

  protected string $id = 'KodakIFD:TDA1EdgePolarity';

  protected string $name = 'TDA1EdgePolarity';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'TDA1 Edge Polarity',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::IFD
       * line : 157693
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::IFD.KodakIFD:TDA1EdgePolarity',
      'desc' => [
        'en' => 'TDA1 Edge Polarity',
      ],
    ],
  ];

}
