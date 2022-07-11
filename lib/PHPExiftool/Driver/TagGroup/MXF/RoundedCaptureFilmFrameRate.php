<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RoundedCaptureFilmFrameRate extends AbstractTagGroup
{

  protected string $id = 'MXF:RoundedCaptureFilmFrameRate';

  protected string $name = 'RoundedCaptureFilmFrameRate';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Rounded Capture Film Frame Rate',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 169423
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:RoundedCaptureFilmFrameRate',
      'desc' => [
        'en' => 'Rounded Capture Film Frame Rate',
      ],
    ],
  ];

}
