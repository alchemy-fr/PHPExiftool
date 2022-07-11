<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class NewColorType extends AbstractTagGroup
{

  protected string $id = 'MNG:NewColorType';

  protected string $name = 'NewColorType';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'New Color Type',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MNG::PromoteParent
       * line : 165701
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MNG::PromoteParent.MNG:NewColorType',
      'desc' => [
        'en' => 'New Color Type',
      ],
    ],
  ];

}
