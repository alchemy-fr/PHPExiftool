<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sigma;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LensMaxApertureRange extends AbstractTagGroup
{

  protected string $id = 'Sigma:LensMaxApertureRange';

  protected string $name = 'LensMaxApertureRange';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Lens Max Aperture Range',
  ];

  protected int $count = 2;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sigma::Main
       * line : 339098
       * type : rational64u
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Sigma::Main.Sigma:LensMaxApertureRange',
      'desc' => [
        'en' => 'Lens Max Aperture Range',
      ],
    ],
  ];

}
