<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Lytro;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageLimitExposureBias extends AbstractTagGroup
{

  protected string $id = 'Lytro:ImageLimitExposureBias';

  protected string $name = 'ImageLimitExposureBias';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Image Limit Exposure Bias',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Lytro::Main
       * line : 162693
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Lytro::Main.Lytro:ImageLimitExposureBias',
      'desc' => [
        'en' => 'Image Limit Exposure Bias',
      ],
    ],
  ];

}
