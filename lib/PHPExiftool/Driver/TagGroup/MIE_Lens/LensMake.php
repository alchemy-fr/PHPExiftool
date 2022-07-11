<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MIE_Lens;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LensMake extends AbstractTagGroup
{

  protected string $id = 'MIE-Lens:LensMake';

  protected string $name = 'LensMake';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Lens Make',
    'fr' => 'Fabricant d\'objectif',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MIE::Lens
       * line : 164284
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'MIE::Lens.MIE-Lens:LensMake',
      'desc' => [
        'en' => 'Lens Make',
        'fr' => 'Fabricant d\'objectif',
      ],
    ],
  ];

}
