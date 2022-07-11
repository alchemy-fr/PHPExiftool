<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IPTC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ActionAdvised extends AbstractTagGroup
{

  protected string $id = 'IPTC:ActionAdvised';

  protected string $name = 'ActionAdvised';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Action Advised',
    'fr' => 'Action conseillée',
  ];

  protected int $count = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::ApplicationRecord
       * line : 150355
       * type : digits
       * writable : true
       * count : 2
       * flags : 
       */
      'id' => 'IPTC::ApplicationRecord.IPTC:ActionAdvised',
      'desc' => [
        'en' => 'Action Advised',
        'fr' => 'Action conseillée',
      ],
    ],
  ];

}
