<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PhotoMechanic;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PreviewCropRight extends AbstractTagGroup
{

  protected string $id = 'PhotoMechanic:PreviewCropRight';

  protected string $name = 'PreviewCropRight';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Preview Crop Right',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PhotoMechanic::SoftEdit
       * line : 305204
       * type : int32s
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'PhotoMechanic::SoftEdit.PhotoMechanic:PreviewCropRight',
      'desc' => [
        'en' => 'Preview Crop Right',
      ],
    ],
  ];

}
