<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Photoshop;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class XResolution extends AbstractTagGroup
{

  protected string $id = 'Photoshop:XResolution';

  protected string $name = 'XResolution';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'X Resolution',
    'fr' => 'Résolution d\'image horizontale',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Photoshop::Resolution
       * line : 306099
       * type : int32u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Photoshop::Resolution.Photoshop:XResolution',
      'desc' => [
        'en' => 'X Resolution',
        'fr' => 'Résolution d\'image horizontale',
      ],
    ],
  ];

}
