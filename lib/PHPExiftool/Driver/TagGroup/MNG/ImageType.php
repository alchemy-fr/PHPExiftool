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
class ImageType extends AbstractTagGroup
{

  protected string $id = 'MNG:ImageType';

  protected string $name = 'ImageType';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Image Type',
    'fr' => 'Type d\'image',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MNG::DeltaPNGHeader
       * line : 165112
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MNG::DeltaPNGHeader.MNG:ImageType',
      'desc' => [
        'en' => 'Image Type',
        'fr' => 'Type d\'image',
      ],
    ],
  ];

}
