<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ContractTermsOfBusiness extends AbstractTagGroup
{

  protected string $id = 'MXF:ContractTermsOfBusiness';

  protected string $name = 'ContractTermsOfBusiness';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Contract Terms Of Business',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 170246
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:ContractTermsOfBusiness',
      'desc' => [
        'en' => 'Contract Terms Of Business',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 171000
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:ContractTermsOfBusiness',
      'desc' => [
        'en' => 'Contract Terms Of Business',
      ],
    ],
  ];

}
