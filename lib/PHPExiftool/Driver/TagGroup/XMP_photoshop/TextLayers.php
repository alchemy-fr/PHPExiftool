<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_photoshop;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TextLayers extends AbstractTagGroup
{

  protected string $id = 'XMP-photoshop:TextLayers';

  protected string $name = 'TextLayers';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Text Layers',
  ];

  protected int $count = 0;

  protected int $flags = 576;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::photoshop
       * line : 410725
       * type : struct
       * writable : true
       * count : 
       * flags : List,Seq
       */
      'id' => 'XMP::photoshop.XMP-photoshop:TextLayers',
      'desc' => [
        'en' => 'Text Layers',
      ],
    ],
  ];

}
