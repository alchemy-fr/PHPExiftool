<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Adobe;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorTransform extends AbstractTagGroup
{

  protected string $id = 'Adobe:ColorTransform';

  protected string $name = 'ColorTransform';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Color Transform',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : JPEG::Adobe
       * line : 152748
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'JPEG::Adobe.Adobe:ColorTransform',
      'desc' => [
        'en' => 'Color Transform',
      ],
    ],
  ];

}
