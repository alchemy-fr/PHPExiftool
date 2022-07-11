<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SPIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ProfileID extends AbstractTagGroup
{

  protected string $id = 'SPIFF:ProfileID';

  protected string $name = 'ProfileID';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Profile ID',
    'fr' => 'ID du profil',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : JPEG::SPIFF
       * line : 153410
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'JPEG::SPIFF.SPIFF:ProfileID',
      'desc' => [
        'en' => 'Profile ID',
        'fr' => 'ID du profil',
      ],
    ],
  ];

}
