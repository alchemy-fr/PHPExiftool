<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PreviewImageBorders extends AbstractTagGroup
{

  protected string $id = 'Pentax:PreviewImageBorders';

  protected string $name = 'PreviewImageBorders';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Preview Image Borders',
    'fr' => 'Limites d\'image miniature',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::Main
       * line : 299857
       * type : int8u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Pentax::Main.Pentax:PreviewImageBorders',
      'desc' => [
        'en' => 'Preview Image Borders',
        'fr' => 'Limites d\'image miniature',
      ],
    ],
  ];

}
