<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ExifIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SubjectDistanceRange extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:SubjectDistanceRange';

  protected string $name = 'SubjectDistanceRange';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Subject Distance Range',
    'fr' => 'Intervalle de distance du sujet',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 118100
       * type : int16u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:SubjectDistanceRange',
      'desc' => [
        'en' => 'Subject Distance Range',
        'fr' => 'Intervalle de distance du sujet',
      ],
    ],
  ];

}
