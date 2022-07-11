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
class MaxApertureValue extends AbstractTagGroup
{

  protected string $id = 'Nikon:MaxApertureValue';

  protected string $name = 'MaxApertureValue';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Max Aperture Value',
    'fr' => 'Ouverture maximale de l\'objectif',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::AVITags
       * line : 191741
       * type : rational64u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::AVITags.Nikon:MaxApertureValue',
      'desc' => [
        'en' => 'Max Aperture Value',
        'fr' => 'Ouverture maximale de l\'objectif',
      ],
    ],
  ];

}
