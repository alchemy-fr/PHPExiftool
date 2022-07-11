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
class PictureWizardContrast extends AbstractTagGroup
{

  protected string $id = 'Samsung:PictureWizardContrast';

  protected string $name = 'PictureWizardContrast';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Picture Wizard Contrast',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Samsung::PictureWizard
       * line : 334493
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Samsung::PictureWizard.Samsung:PictureWizardContrast',
      'desc' => [
        'en' => 'Picture Wizard Contrast',
      ],
    ],
  ];

}
