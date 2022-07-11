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
class YCbCrPositioning extends AbstractTagGroup
{

  protected string $id = 'XMP-tiff:YCbCrPositioning';

  protected string $name = 'YCbCrPositioning';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Y Cb Cr Positioning',
    'fr' => 'Positionnement Y et C',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::tiff
       * line : 412771
       * type : integer
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::tiff.XMP-tiff:YCbCrPositioning',
      'desc' => [
        'en' => 'Y Cb Cr Positioning',
        'fr' => 'Positionnement Y et C',
      ],
    ],
  ];

}
