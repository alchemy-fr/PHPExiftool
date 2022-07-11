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
class CompObjUserType extends AbstractTagGroup
{

  protected string $id = 'FlashPix:CompObjUserType';

  protected string $name = 'CompObjUserType';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Comp Obj User Type',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FlashPix::CompObj
       * line : 124608
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FlashPix::CompObj.FlashPix:CompObjUserType',
      'desc' => [
        'en' => 'Comp Obj User Type',
      ],
    ],
  ];

}
