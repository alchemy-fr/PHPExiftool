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
class PreviewAtomType extends AbstractTagGroup
{

  protected string $id = 'QuickTime:PreviewAtomType';

  protected string $name = 'PreviewAtomType';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Preview Atom Type',
  ];

  protected int $count = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::Preview
       * line : 324578
       * type : string
       * writable : false
       * count : 4
       * flags : 
       */
      'id' => 'QuickTime::Preview.QuickTime:PreviewAtomType',
      'desc' => [
        'en' => 'Preview Atom Type',
      ],
    ],
  ];

}
