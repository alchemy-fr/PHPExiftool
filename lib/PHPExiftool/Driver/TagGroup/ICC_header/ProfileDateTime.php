<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ICC_header;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ProfileDateTime extends AbstractTagGroup
{

  protected string $id = 'ICC-header:ProfileDateTime';

  protected string $name = 'ProfileDateTime';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Profile Date Time',
    'fr' => 'Horodatage du profil',
  ];

  protected int $count = 6;

  protected array $tags = [
    0 => [
      /**
       * table_name : ICC_Profile::Header
       * line : 144485
       * type : int16u
       * writable : false
       * count : 6
       * flags : 
       */
      'id' => 'ICC_Profile::Header.ICC-header:ProfileDateTime',
      'desc' => [
        'en' => 'Profile Date Time',
        'fr' => 'Horodatage du profil',
      ],
    ],
  ];

}
