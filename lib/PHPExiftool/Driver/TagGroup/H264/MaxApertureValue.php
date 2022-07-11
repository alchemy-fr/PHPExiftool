<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\H264;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MaxApertureValue extends AbstractTagGroup
{

  protected string $id = 'H264:MaxApertureValue';

  protected string $name = 'MaxApertureValue';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Max Aperture Value',
    'fr' => 'Ouverture maximale de l\'objectif',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : H264::MDPM
       * line : 140961
       * type : rational32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'H264::MDPM.H264:MaxApertureValue',
      'desc' => [
        'en' => 'Max Aperture Value',
        'fr' => 'Ouverture maximale de l\'objectif',
      ],
    ],
  ];

}
