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
class SourceID extends AbstractTagGroup
{

  protected string $id = 'MNG:SourceID';

  protected string $name = 'SourceID';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Source ID',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MNG::CloneObject
       * line : 165045
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MNG::CloneObject.MNG:SourceID',
      'desc' => [
        'en' => 'Source ID',
      ],
    ],
    1 => [
      /**
       * table_name : MNG::PasteImage
       * line : 165615
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MNG::PasteImage.MNG:SourceID',
      'desc' => [
        'en' => 'Source ID',
      ],
    ],
  ];

}
