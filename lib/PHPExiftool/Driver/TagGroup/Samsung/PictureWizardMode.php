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
class PictureWizardMode extends AbstractTagGroup
{

  protected string $id = 'Samsung:PictureWizardMode';

  protected string $name = 'PictureWizardMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Picture Wizard Mode',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Samsung::PictureWizard
       * line : 334424
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Samsung::PictureWizard.Samsung:PictureWizardMode',
      'desc' => [
        'en' => 'Picture Wizard Mode',
      ],
    ],
  ];

}
