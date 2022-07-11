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
class PictureWizard extends AbstractTagGroup
{

  protected string $id = 'Samsung:PictureWizard';

  protected string $name = 'PictureWizard';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Picture Wizard',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Samsung::Type2
       * line : 335566
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Samsung::Type2.Samsung:PictureWizard',
      'desc' => [
        'en' => 'Picture Wizard',
      ],
    ],
  ];

}
