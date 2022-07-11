<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_crd;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PostCropVignetteHighlightContrast extends AbstractTagGroup
{

  protected string $id = 'XMP-crd:PostCropVignetteHighlightContrast';

  protected string $name = 'PostCropVignetteHighlightContrast';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Post Crop Vignette Highlight Contrast',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crd
       * line : 400937
       * type : integer
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'XMP::crd.XMP-crd:PostCropVignetteHighlightContrast',
      'desc' => [
        'en' => 'Post Crop Vignette Highlight Contrast',
      ],
    ],
  ];

}
