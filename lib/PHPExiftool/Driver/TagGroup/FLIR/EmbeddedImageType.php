<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLIR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class EmbeddedImageType extends AbstractTagGroup
{

  protected string $id = 'FLIR:EmbeddedImageType';

  protected string $name = 'EmbeddedImageType';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Embedded Image Type',
  ];

  protected int $count = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::EmbeddedImage
       * line : 122762
       * type : undef
       * writable : false
       * count : 4
       * flags : 
       */
      'id' => 'FLIR::EmbeddedImage.FLIR:EmbeddedImageType',
      'desc' => [
        'en' => 'Embedded Image Type',
      ],
    ],
  ];

}
