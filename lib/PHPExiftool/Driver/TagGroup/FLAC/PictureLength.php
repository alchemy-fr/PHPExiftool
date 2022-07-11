<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLAC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PictureLength extends AbstractTagGroup
{

  protected string $id = 'FLAC:PictureLength';

  protected string $name = 'PictureLength';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Picture Length',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLAC::Picture
       * line : 122261
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLAC::Picture.FLAC:PictureLength',
      'desc' => [
        'en' => 'Picture Length',
      ],
    ],
  ];

}
