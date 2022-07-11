<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\UserData;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PreviewImage extends AbstractTagGroup
{

  protected string $id = 'UserData:PreviewImage';

  protected string $name = 'PreviewImage';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Preview Image',
    'fr' => 'Aperçu',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::UserData
       * line : 325621
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::UserData.UserData:PreviewImage',
      'desc' => [
        'en' => 'Preview Image',
        'fr' => 'Aperçu',
      ],
    ],
    1 => [
      /**
       * table_name : QuickTime::UserData
       * line : 325891
       * type : string
       * writable : true
       * count : 
       * flags : Binary
       */
      'id' => 'QuickTime::UserData.UserData:PreviewImage',
      'desc' => [
        'en' => 'Preview Image',
        'fr' => 'Aperçu',
      ],
    ],
  ];

}
