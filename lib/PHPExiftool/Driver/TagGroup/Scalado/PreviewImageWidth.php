<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Scalado;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PreviewImageWidth extends AbstractTagGroup
{

  protected string $id = 'Scalado:PreviewImageWidth';

  protected string $name = 'PreviewImageWidth';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Preview Image Width',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Scalado::Main
       * line : 337290
       * type : int32s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Scalado::Main.Scalado:PreviewImageWidth',
      'desc' => [
        'en' => 'Preview Image Width',
      ],
    ],
  ];

}
