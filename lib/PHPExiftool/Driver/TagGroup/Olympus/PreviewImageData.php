<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PreviewImageData extends AbstractTagGroup
{

  protected string $id = 'Olympus:PreviewImageData';

  protected string $name = 'PreviewImageData';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Preview Image Data',
    'fr' => 'Données d\'image miniature',
  ];

  protected int $count = 0;

  protected int $flags = 6;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::Main
       * line : 257185
       * type : ?
       * writable : true
       * count : 
       * flags : Binary,Permanent
       */
      'id' => 'Olympus::Main.Olympus:PreviewImageData',
      'desc' => [
        'en' => 'Preview Image Data',
        'fr' => 'Données d\'image miniature',
      ],
    ],
  ];

}
