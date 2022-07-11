<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PreviewWMF extends AbstractTagGroup
{

  protected string $id = 'File:PreviewWMF';

  protected string $name = 'PreviewWMF';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Preview WMF',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : Extra
       * line : 121858
       * type : ?
       * writable : false
       * count : 
       * flags : Binary
       */
      'id' => 'Extra.File:PreviewWMF',
      'desc' => [
        'en' => 'Preview WMF',
      ],
    ],
  ];

}
