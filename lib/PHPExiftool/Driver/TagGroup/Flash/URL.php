<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Flash;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class URL extends AbstractTagGroup
{

  protected string $id = 'Flash:URL';

  protected string $name = 'URL';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'URL',
    'fr' => 'URL',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Flash::Meta
       * line : 124511
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Flash::Meta.Flash:URL',
      'desc' => [
        'en' => 'URL',
        'fr' => 'URL',
      ],
    ],
  ];

}
