<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\HTML_vw96;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ObjectType extends AbstractTagGroup
{

  protected string $id = 'HTML-vw96:ObjectType';

  protected string $name = 'ObjectType';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Object Type',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : HTML::vw96
       * line : 143422
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'HTML::vw96.HTML-vw96:ObjectType',
      'desc' => [
        'en' => 'Object Type',
      ],
    ],
  ];

}
