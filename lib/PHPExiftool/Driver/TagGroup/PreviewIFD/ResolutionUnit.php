<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PreviewIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ResolutionUnit extends AbstractTagGroup
{

  protected string $id = 'PreviewIFD:ResolutionUnit';

  protected string $name = 'ResolutionUnit';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Resolution Unit',
    'fr' => 'Unité de résolution en X et Y',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::PreviewIFD
       * line : 205385
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::PreviewIFD.PreviewIFD:ResolutionUnit',
      'desc' => [
        'en' => 'Resolution Unit',
        'fr' => 'Unité de résolution en X et Y',
      ],
    ],
  ];

}
