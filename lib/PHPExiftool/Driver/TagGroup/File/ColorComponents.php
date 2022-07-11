<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorComponents extends AbstractTagGroup
{

  protected string $id = 'File:ColorComponents';

  protected string $name = 'ColorComponents';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Color Components',
    'fr' => 'Composants colorimétriques',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : JPEG::SOF
       * line : 153230
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'JPEG::SOF.File:ColorComponents',
      'desc' => [
        'en' => 'Color Components',
        'fr' => 'Composants colorimétriques',
      ],
    ],
    1 => [
      /**
       * table_name : PGF::Main
       * line : 264874
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PGF::Main.File:ColorComponents',
      'desc' => [
        'en' => 'Color Components',
        'fr' => 'Composants colorimétriques',
      ],
    ],
  ];

}
