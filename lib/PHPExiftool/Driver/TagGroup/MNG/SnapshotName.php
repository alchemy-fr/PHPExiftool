<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SnapshotName extends AbstractTagGroup
{

  protected string $id = 'MNG:SnapshotName';

  protected string $name = 'SnapshotName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Snapshot Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MNG::ExportImage
       * line : 165181
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MNG::ExportImage.MNG:SnapshotName',
      'desc' => [
        'en' => 'Snapshot Name',
      ],
    ],
  ];

}
