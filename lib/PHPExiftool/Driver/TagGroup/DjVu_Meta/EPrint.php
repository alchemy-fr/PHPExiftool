<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DjVu_Meta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class EPrint extends AbstractTagGroup
{

  protected string $id = 'DjVu-Meta:EPrint';

  protected string $name = 'EPrint';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'E Print',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DjVu::Meta
       * line : 107762
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DjVu::Meta.DjVu-Meta:EPrint',
      'desc' => [
        'en' => 'E Print',
      ],
    ],
  ];

}
