<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class STEMDetectorName extends AbstractTagGroup
{

  protected string $id = 'File:STEMDetectorName';

  protected string $name = 'STEMDetectorName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'STEM Detector Name',
  ];

  protected int $count = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : MRC::FEI12
       * line : 167007
       * type : string
       * writable : false
       * count : 16
       * flags : 
       */
      'id' => 'MRC::FEI12.File:STEMDetectorName',
      'desc' => [
        'en' => 'STEM Detector Name',
      ],
    ],
  ];

}
