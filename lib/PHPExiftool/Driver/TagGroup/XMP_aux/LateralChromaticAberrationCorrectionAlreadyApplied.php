<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_aux;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LateralChromaticAberrationCorrectionAlreadyApplied extends AbstractTagGroup
{

  protected string $id = 'XMP-aux:LateralChromaticAberrationCorrectionAlreadyApplied';

  protected string $name = 'LateralChromaticAberrationCorrectionAlreadyApplied';

  protected ?string $phpType = 'boolean';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Lateral Chromatic Aberration Correction Already Applied',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::aux
       * line : 398308
       * type : boolean
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::aux.XMP-aux:LateralChromaticAberrationCorrectionAlreadyApplied',
      'desc' => [
        'en' => 'Lateral Chromatic Aberration Correction Already Applied',
      ],
    ],
  ];

}
