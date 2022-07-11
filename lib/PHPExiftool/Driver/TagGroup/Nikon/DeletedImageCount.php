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
class DeletedImageCount extends AbstractTagGroup
{

  protected string $id = 'Nikon:DeletedImageCount';

  protected string $name = 'DeletedImageCount';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Deleted Image Count',
    'fr' => 'Compteur d\'images supprimées',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::Main
       * line : 199733
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::Main.Nikon:DeletedImageCount',
      'desc' => [
        'en' => 'Deleted Image Count',
        'fr' => 'Compteur d\'images supprimées',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::ShotInfo
       * line : 205709
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfo.Nikon:DeletedImageCount',
      'desc' => [
        'en' => 'Deleted Image Count',
        'fr' => 'Compteur d\'images supprimées',
      ],
    ],
  ];

}
