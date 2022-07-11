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
class E_mailAddress extends AbstractTagGroup
{

  protected string $id = 'MXF:E-mailAddress';

  protected string $name = 'E-mailAddress';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'E-mail Address',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 168823
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:E-mailAddress',
      'desc' => [
        'en' => 'E-mail Address',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 170884
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:E-mailAddress',
      'desc' => [
        'en' => 'E-mail Address',
      ],
    ],
  ];

}
