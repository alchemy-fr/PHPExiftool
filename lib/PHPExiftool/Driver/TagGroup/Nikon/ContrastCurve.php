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
class ContrastCurve extends AbstractTagGroup
{

  protected string $id = 'Nikon:ContrastCurve';

  protected string $name = 'ContrastCurve';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Contrast Curve',
    'fr' => 'Courbe de contraste',
  ];

  protected int $count = 0;

  protected int $flags = 22;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::Main
       * line : 197693
       * type : undef
       * writable : true
       * count : 
       * flags : Binary,Permanent,Unsafe
       */
      'id' => 'Nikon::Main.Nikon:ContrastCurve',
      'desc' => [
        'en' => 'Contrast Curve',
        'fr' => 'Courbe de contraste',
      ],
    ],
  ];

}
