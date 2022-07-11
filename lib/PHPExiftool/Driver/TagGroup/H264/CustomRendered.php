<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\H264;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CustomRendered extends AbstractTagGroup
{

  protected string $id = 'H264:CustomRendered';

  protected string $name = 'CustomRendered';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Custom Rendered',
    'fr' => 'Traitement d\'image personnalisé',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : H264::MDPM
       * line : 141424
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'H264::MDPM.H264:CustomRendered',
      'desc' => [
        'en' => 'Custom Rendered',
        'fr' => 'Traitement d\'image personnalisé',
      ],
    ],
  ];

}
