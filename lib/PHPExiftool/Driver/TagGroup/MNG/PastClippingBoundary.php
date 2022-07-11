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
class PastClippingBoundary extends AbstractTagGroup
{

  protected string $id = 'MNG:PastClippingBoundary';

  protected string $name = 'PastClippingBoundary';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Past Clipping Boundary',
  ];

  protected int $count = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : MNG::PasteImage
       * line : 165694
       * type : int32u
       * writable : false
       * count : 4
       * flags : 
       */
      'id' => 'MNG::PasteImage.MNG:PastClippingBoundary',
      'desc' => [
        'en' => 'Past Clipping Boundary',
      ],
    ],
  ];

}
