<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmp;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RatingPercent extends AbstractTagGroup
{

  protected string $id = 'XMP-xmp:RatingPercent';

  protected string $name = 'RatingPercent';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Rating Percent',
    'fr' => 'Rapport en pourcentage',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmp
       * line : 413056
       * type : real
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'XMP::xmp.XMP-xmp:RatingPercent',
      'desc' => [
        'en' => 'Rating Percent',
        'fr' => 'Rapport en pourcentage',
      ],
    ],
  ];

}
