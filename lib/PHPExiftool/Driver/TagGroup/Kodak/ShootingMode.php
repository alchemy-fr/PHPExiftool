<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ShootingMode extends AbstractTagGroup
{

  protected string $id = 'Kodak:ShootingMode';

  protected string $name = 'ShootingMode';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Shooting Mode',
    'fr' => 'Télécommande IR',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::TextualInfo
       * line : 160108
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::TextualInfo.Kodak:ShootingMode',
      'desc' => [
        'en' => 'Shooting Mode',
        'fr' => 'Télécommande IR',
      ],
    ],
  ];

}
