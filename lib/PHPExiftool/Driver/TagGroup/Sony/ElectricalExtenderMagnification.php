<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ElectricalExtenderMagnification extends AbstractTagGroup
{

  protected string $id = 'Sony:ElectricalExtenderMagnification';

  protected string $name = 'ElectricalExtenderMagnification';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Electrical Extender Magnification',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::rtmd
       * line : 393840
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Sony::rtmd.Sony:ElectricalExtenderMagnification',
      'desc' => [
        'en' => 'Electrical Extender Magnification',
      ],
    ],
  ];

}
