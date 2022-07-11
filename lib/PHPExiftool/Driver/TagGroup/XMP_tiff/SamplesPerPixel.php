<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_tiff;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SamplesPerPixel extends AbstractTagGroup
{

  protected string $id = 'XMP-tiff:SamplesPerPixel';

  protected string $name = 'SamplesPerPixel';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Samples Per Pixel',
    'fr' => 'Nombre de composantes',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::tiff
       * line : 412666
       * type : integer
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::tiff.XMP-tiff:SamplesPerPixel',
      'desc' => [
        'en' => 'Samples Per Pixel',
        'fr' => 'Nombre de composantes',
      ],
    ],
  ];

}
