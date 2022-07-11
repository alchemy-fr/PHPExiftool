<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Theora;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class NominalVideoBitrate extends AbstractTagGroup
{

  protected string $id = 'Theora:NominalVideoBitrate';

  protected string $name = 'NominalVideoBitrate';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Nominal Video Bitrate',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Theora::Identification
       * line : 395239
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Theora::Identification.Theora:NominalVideoBitrate',
      'desc' => [
        'en' => 'Nominal Video Bitrate',
      ],
    ],
  ];

}
