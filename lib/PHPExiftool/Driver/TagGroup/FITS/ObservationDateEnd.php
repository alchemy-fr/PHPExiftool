<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FITS;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ObservationDateEnd extends AbstractTagGroup
{

  protected string $id = 'FITS:ObservationDateEnd';

  protected string $name = 'ObservationDateEnd';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Observation Date End',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FITS::Main
       * line : 122029
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FITS::Main.FITS:ObservationDateEnd',
      'desc' => [
        'en' => 'Observation Date End',
      ],
    ],
  ];

}
