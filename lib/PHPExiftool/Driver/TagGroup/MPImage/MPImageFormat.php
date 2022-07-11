<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MPImage;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MPImageFormat extends AbstractTagGroup
{

  protected string $id = 'MPImage:MPImageFormat';

  protected string $name = 'MPImageFormat';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'MP Image Format',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MPF::MPImage
       * line : 166517
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MPF::MPImage.MPImage:MPImageFormat',
      'desc' => [
        'en' => 'MP Image Format',
      ],
    ],
  ];

}
