<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Lytro;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CameraType extends AbstractTagGroup
{

  protected string $id = 'Lytro:CameraType';

  protected string $name = 'CameraType';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Camera Type',
    'fr' => 'Type d\'objectif Pentax',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Lytro::Main
       * line : 162742
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Lytro::Main.Lytro:CameraType',
      'desc' => [
        'en' => 'Camera Type',
        'fr' => 'Type d\'objectif Pentax',
      ],
    ],
  ];

}
