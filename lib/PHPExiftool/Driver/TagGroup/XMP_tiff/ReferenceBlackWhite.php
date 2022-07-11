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
class ReferenceBlackWhite extends AbstractTagGroup
{

  protected string $id = 'XMP-tiff:ReferenceBlackWhite';

  protected string $name = 'ReferenceBlackWhite';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Reference Black White',
    'fr' => 'Paire de valeurs de référence noir et blanc',
  ];

  protected int $count = 0;

  protected int $flags = 576;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::tiff
       * line : 412581
       * type : rational
       * writable : true
       * count : 
       * flags : List,Seq
       */
      'id' => 'XMP::tiff.XMP-tiff:ReferenceBlackWhite',
      'desc' => [
        'en' => 'Reference Black White',
        'fr' => 'Paire de valeurs de référence noir et blanc',
      ],
    ],
  ];

}
