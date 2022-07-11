<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Samsung;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PictureWizardSaturation extends AbstractTagGroup
{

  protected string $id = 'Samsung:PictureWizardSaturation';

  protected string $name = 'PictureWizardSaturation';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Picture Wizard Saturation',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Samsung::PictureWizard
       * line : 334487
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Samsung::PictureWizard.Samsung:PictureWizardSaturation',
      'desc' => [
        'en' => 'Picture Wizard Saturation',
      ],
    ],
  ];

}
