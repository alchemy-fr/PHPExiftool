<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ProfileName extends AbstractTagGroup
{

  protected string $id = 'PNG:ProfileName';

  protected string $name = 'ProfileName';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Profile Name',
    'fr' => 'Nom du profil',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PNG::Main
       * line : 272914
       * type : ?
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'PNG::Main.PNG:ProfileName',
      'desc' => [
        'en' => 'Profile Name',
        'fr' => 'Nom du profil',
      ],
    ],
  ];

}
