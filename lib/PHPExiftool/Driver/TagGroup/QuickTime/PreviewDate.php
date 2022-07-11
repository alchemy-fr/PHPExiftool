<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PreviewDate extends AbstractTagGroup
{

  protected string $id = 'QuickTime:PreviewDate';

  protected string $name = 'PreviewDate';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Preview Date',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::Preview
       * line : 324571
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'QuickTime::Preview.QuickTime:PreviewDate',
      'desc' => [
        'en' => 'Preview Date',
      ],
    ],
  ];

}
