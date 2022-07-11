<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IFD0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class UniqueCameraModel extends AbstractTagGroup
{

  protected string $id = 'IFD0:UniqueCameraModel';

  protected string $name = 'UniqueCameraModel';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Unique Camera Model',
    'fr' => 'Nom unique de modèle d\'appareil',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 119178
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.IFD0:UniqueCameraModel',
      'desc' => [
        'en' => 'Unique Camera Model',
        'fr' => 'Nom unique de modèle d\'appareil',
      ],
    ],
  ];

}
