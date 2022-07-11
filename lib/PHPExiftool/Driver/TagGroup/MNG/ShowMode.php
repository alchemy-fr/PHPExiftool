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
class ShowMode extends AbstractTagGroup
{

  protected string $id = 'MNG:ShowMode';

  protected string $name = 'ShowMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Show Mode',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MNG::ShowObjects
       * line : 165731
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MNG::ShowObjects.MNG:ShowMode',
      'desc' => [
        'en' => 'Show Mode',
      ],
    ],
  ];

}
