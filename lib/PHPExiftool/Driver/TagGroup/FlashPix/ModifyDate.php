<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FlashPix;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ModifyDate extends AbstractTagGroup
{

  protected string $id = 'FlashPix:ModifyDate';

  protected string $name = 'ModifyDate';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Modify Date',
    'fr' => 'Date de modification de fichier',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FlashPix::ImageInfo
       * line : 126832
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FlashPix::ImageInfo.FlashPix:ModifyDate',
      'desc' => [
        'en' => 'Modify Date',
        'fr' => 'Date de modification de fichier',
      ],
    ],
    1 => [
      /**
       * table_name : FlashPix::SummaryInfo
       * line : 127573
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FlashPix::SummaryInfo.FlashPix:ModifyDate',
      'desc' => [
        'en' => 'Modify Date',
        'fr' => 'Date de modification de fichier',
      ],
    ],
  ];

}
