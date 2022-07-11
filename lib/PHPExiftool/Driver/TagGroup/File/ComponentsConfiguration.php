<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ComponentsConfiguration extends AbstractTagGroup
{

  protected string $id = 'File:ComponentsConfiguration';

  protected string $name = 'ComponentsConfiguration';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Components Configuration',
    'fr' => 'Signification de chaque composante',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DPX::Main
       * line : 105932
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DPX::Main.File:ComponentsConfiguration',
      'desc' => [
        'en' => 'Components Configuration',
        'fr' => 'Signification de chaque composante',
      ],
    ],
  ];

}
