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
class CreateDate extends AbstractTagGroup
{

  protected string $id = 'FlashPix:CreateDate';

  protected string $name = 'CreateDate';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Create Date',
    'fr' => 'Date de la création des données numériques',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FlashPix::ImageInfo
       * line : 125444
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FlashPix::ImageInfo.FlashPix:CreateDate',
      'desc' => [
        'en' => 'Create Date',
        'fr' => 'Date de la création des données numériques',
      ],
    ],
    1 => [
      /**
       * table_name : FlashPix::SummaryInfo
       * line : 127555
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FlashPix::SummaryInfo.FlashPix:CreateDate',
      'desc' => [
        'en' => 'Create Date',
        'fr' => 'Date de la création des données numériques',
      ],
    ],
  ];

}
