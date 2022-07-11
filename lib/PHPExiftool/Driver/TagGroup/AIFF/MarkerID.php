<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\AIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MarkerID extends AbstractTagGroup
{

  protected string $id = 'AIFF:MarkerID';

  protected string $name = 'MarkerID';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Marker ID',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : AIFF::Comment
       * line : 60
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'AIFF::Comment.AIFF:MarkerID',
      'desc' => [
        'en' => 'Marker ID',
      ],
    ],
  ];

}
