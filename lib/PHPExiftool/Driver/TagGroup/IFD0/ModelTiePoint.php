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
class ModelTiePoint extends AbstractTagGroup
{

  protected string $id = 'IFD0:ModelTiePoint';

  protected string $name = 'ModelTiePoint';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Model Tie Point',
    'fr' => 'Tag de lien d modèle',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 113523
       * type : double
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.IFD0:ModelTiePoint',
      'desc' => [
        'en' => 'Model Tie Point',
        'fr' => 'Tag de lien d modèle',
      ],
    ],
  ];

}
