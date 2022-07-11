<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MIE_Image;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ComponentsConfiguration extends AbstractTagGroup
{

  protected string $id = 'MIE-Image:ComponentsConfiguration';

  protected string $name = 'ComponentsConfiguration';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Components Configuration',
    'fr' => 'Signification de chaque composante',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MIE::Image
       * line : 164181
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'MIE::Image.MIE-Image:ComponentsConfiguration',
      'desc' => [
        'en' => 'Components Configuration',
        'fr' => 'Signification de chaque composante',
      ],
    ],
  ];

}
