<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MIE_Flash;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FlashModel extends AbstractTagGroup
{

  protected string $id = 'MIE-Flash:FlashModel';

  protected string $name = 'FlashModel';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Flash Model',
    'fr' => 'Modèle de Flash',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MIE::Flash
       * line : 163775
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'MIE::Flash.MIE-Flash:FlashModel',
      'desc' => [
        'en' => 'Flash Model',
        'fr' => 'Modèle de Flash',
      ],
    ],
  ];

}
