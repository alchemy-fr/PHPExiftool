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
class ResolutionUnit extends AbstractTagGroup
{

  protected string $id = 'XMP-tiff:ResolutionUnit';

  protected string $name = 'ResolutionUnit';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Resolution Unit',
    'fr' => 'Unité de résolution en X et Y',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::tiff
       * line : 412599
       * type : integer
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::tiff.XMP-tiff:ResolutionUnit',
      'desc' => [
        'en' => 'Resolution Unit',
        'fr' => 'Unité de résolution en X et Y',
      ],
    ],
  ];

}
