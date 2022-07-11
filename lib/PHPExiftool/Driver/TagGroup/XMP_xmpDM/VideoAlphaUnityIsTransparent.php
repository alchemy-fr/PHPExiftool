<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmpDM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VideoAlphaUnityIsTransparent extends AbstractTagGroup
{

  protected string $id = 'XMP-xmpDM:VideoAlphaUnityIsTransparent';

  protected string $name = 'VideoAlphaUnityIsTransparent';

  protected ?string $phpType = 'boolean';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Video Alpha Unity Is Transparent',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmpDM
       * line : 414042
       * type : boolean
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::xmpDM.XMP-xmpDM:VideoAlphaUnityIsTransparent',
      'desc' => [
        'en' => 'Video Alpha Unity Is Transparent',
      ],
    ],
  ];

}
