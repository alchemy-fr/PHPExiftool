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
class RevisionNumber extends AbstractTagGroup
{

  protected string $id = 'FlashPix:RevisionNumber';

  protected string $name = 'RevisionNumber';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Revision Number',
    'fr' => 'Numéro de révision',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FlashPix::DataObject
       * line : 124707
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FlashPix::DataObject.FlashPix:RevisionNumber',
      'desc' => [
        'en' => 'Revision Number',
        'fr' => 'Numéro de révision',
      ],
    ],
    1 => [
      /**
       * table_name : FlashPix::SummaryInfo
       * line : 127538
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FlashPix::SummaryInfo.FlashPix:RevisionNumber',
      'desc' => [
        'en' => 'Revision Number',
        'fr' => 'Numéro de révision',
      ],
    ],
    2 => [
      /**
       * table_name : FlashPix::Transform
       * line : 127683
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FlashPix::Transform.FlashPix:RevisionNumber',
      'desc' => [
        'en' => 'Revision Number',
        'fr' => 'Numéro de révision',
      ],
    ],
  ];

}
