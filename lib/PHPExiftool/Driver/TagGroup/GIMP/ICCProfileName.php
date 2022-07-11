<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GIMP;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ICCProfileName extends AbstractTagGroup
{

  protected string $id = 'GIMP:ICCProfileName';

  protected string $name = 'ICCProfileName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'ICC Profile Name',
    'fr' => 'Nom du profil ICC',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : GIMP::Parasite
       * line : 131983
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'GIMP::Parasite.GIMP:ICCProfileName',
      'desc' => [
        'en' => 'ICC Profile Name',
        'fr' => 'Nom du profil ICC',
      ],
    ],
  ];

}
