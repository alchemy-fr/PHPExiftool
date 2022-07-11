<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FlashPix;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CompObjUserTypeLen extends AbstractTagGroup
{

  protected string $id = 'FlashPix:CompObjUserTypeLen';

  protected string $name = 'CompObjUserTypeLen';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Comp Obj User Type Len',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FlashPix::CompObj
       * line : 124605
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FlashPix::CompObj.FlashPix:CompObjUserTypeLen',
      'desc' => [
        'en' => 'Comp Obj User Type Len',
      ],
    ],
  ];

}
